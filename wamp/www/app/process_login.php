<?php
include_once 'db_connect.php';
include_once 'functions.php';
 
sec_session_start(); // Function from functions.php for a secure way of starting a php session.
 
if (isset($_POST['email'], $_POST['p'])) {
    $email = $_POST['email'];
    $password = $_POST['p']; // The hashed password.
 
    if (login($email, $password, $mysqli) == true) {
        return true;
    } else {
       return false;
    }
} else {
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';
}