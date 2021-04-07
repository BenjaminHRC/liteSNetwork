<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "J'ai recu une requete";
    // collect value of input field
    $username = $_POST['login_username'];
    $password = $_POST['login_password'];
    
    if (empty($username)) {
        echo "username is empty";
    } else {
        echo $username;
    }

    if (empty($password)) {
        echo "password is empty";
    } else {
        echo $password;
    } 
}