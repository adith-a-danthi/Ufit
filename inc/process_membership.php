<?php
require_once 'db.php';

$error = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $fees = $_POST['fees'];
    $mem_id = $_SESSION['user_id'];
    $gym_id = 1;

    $query = "SELECT * FROM MEMBERSHIP WHERE Mem_ID = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i',$mem_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows>0){
        $query_update = "UPDATE MEMBERSHIP SET Start_Date = ?, End_Date = ?, Fees = ? WHERE Mem_ID = ?";
        $stmt_update = $conn->prepare($query_update);
        $stmt_update->bind_param('ssii',$start_date,$end_date,$fees,$mem_id);
        if($stmt_update->execute() === false){
            error_log($stmt_update->error);
            die('Error while updating membership');
        }
        header('Location:home.php');
    }

    $query_insert = "INSERT INTO MEMBERSHIP(Mem_ID, Gym_ID, Start_Date, End_Date, Fees) VALUES(?,?,?,?,?)";
    $stmt_insert = $conn->prepare($query_insert);
    $stmt_insert->prepare($query_insert);
    $stmt_insert->bind_param('iissi',$mem_id,$gym_id,$start_date,$end_date,$fees);
    if($stmt_insert->execute() === false){
        error_log($stmt_insert->error);
        die('Error while updating membership');
    }

}