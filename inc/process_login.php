<?php

require_once "../inc/db.php";

$error = array();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM MEMBERS WHERE MEMBERS.Mem_email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $result = $result->fetch_assoc();
        if (password_verify($password, $result['Mem_password'])) {

            $_SESSION['logged_in'] = true;
            $_SESSION['user_id'] = $result['Mem_ID'];

            header('Location: home.php');
            exit();

        } else {
            $error['password'] = "Incorrect Password";
        }
    } else {
        $error['email'] = "Email is not registered";
    }
}