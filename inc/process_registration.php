<?php
require_once 'db.php';

$error = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $r_password = $_POST['r_password'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $goal = $_POST['goal'];
    $batch = $_POST['batch'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    if ($password === $r_password) {

        $hash = password_hash($password, PASSWORD_DEFAULT);

        $select = "SELECT * FROM MEMBERS WHERE Mem_email = ?";
        $stmt = $conn->prepare($select);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();

        $dobtime = strtotime($dob);
        $dob = date('Y-m-d', $dobtime);

        if ($stmt->num_rows > 0) {
            $error['email'] = "Email already registered";
        } else {
            $query = "INSERT INTO MEMBERS(Mem_Name, Mem_DOB, Mem_Phone, Mem_Gender, Batch_ID, Mem_email, Mem_password,Mem_Height,Mem_Weight,Mem_Goal) 
                            VALUES (?,?,?,?,?,?,?,?,?,?)";

            $stmt = $conn->prepare($query);
            $stmt->bind_param('ssisissiis', $name, $dob, $phone, $gender, $batch, $email, $hash,$height,$weight,$goal);
            if ($stmt->execute() === false) {
                error_log($conn->error);
                die('Error while registering user');
            }
            header('Location:membership.php');
        }

    }

}