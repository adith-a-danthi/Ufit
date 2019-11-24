<?php
require_once 'db.php';

$error = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $fees = $_POST['fees'];

    
}