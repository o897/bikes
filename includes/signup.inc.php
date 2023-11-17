<?php

if(isset($_POST["submit"])) {
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

    header("location: ../index.php?error:none");

}

