<?php
    $server = 'localhost';
    $user = 'ufit_admin';
    $password = 'qweuyjr#$gt3km5bgt';
    $db = 'ufit';

    $conn = new mysqli($server, $user, $password, $db);

    if ($conn->connect_error){
        die($conn->connect_error);
    }