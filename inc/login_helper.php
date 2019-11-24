<?php

function init_session() {
    session_name("user_session");
    session_start();
    session_regenerate_id(true);
}

function is_logged_in(){
    if(isset($_SESSION['user_id']) && isset($_SESSION['logged_in'])){
        return true;
    } else {
        return false;
    }
}