<?php
require_once '../inc/login_helper.php';
init_session();
unset($_SESSION);
session_destroy();
header('Location:/');