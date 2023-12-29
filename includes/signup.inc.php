<?php
require_once('CSRF.php');

if(isset($_POST["submit"])) {

    $token = filter_input(INPUT_POST,'token',FILTER_SANITIZE_STRING);

   
    if(CSRF::validate_token($token)){

    $username = $_POST["username"];
    $contact = $_POST["contact"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
    $email = $_POST["email"];

    include "../Models/dbh.php";
    include "../Models/User.php";
    include "./Controllers/RegisterController.php";

    $signup = new SignupController($username,$password,$password2,$email,$contact);

    $signup->signupUser();

    } else {
        echo '<p class="error">Error: invalid form submission</p>';
        header($_SERVER['SERVER_PROTOCOL'] . '405 Method Not Allowed');
        exit();
    }

}

