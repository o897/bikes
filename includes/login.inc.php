<?php

require_once('CSRF.php');
if(isset($_POST["submit"])) {


    $token = filter_input(INPUT_POST,'token',FILTER_SANITIZE_STRING);

    echo $token;
    exit();
    if(CSRF::validate_token($token)){
        $username = $_POST["username"];
        $password = $_POST["password"];
    
        include "../Models/dbh.php";
        include "../Models/User.php";
        include "../Models/Bike.php";
        include "./Controllers/LoginController.php";
        include "./Controllers/BikesController.php";
    
        $login = new LoginController($username,$password);
    
        $login->loginUser();
    
        // If login was successful go to bikes
    } else {

        echo '<p class="error">Error: invalid form submission</p>';
        header($_SERVER['SERVER_PROTOCOL'] . '405 Method Not Allowed');
        exit();
    
    }
 


}