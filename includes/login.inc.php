<?php

if(isset($_POST["submit"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    include "../Models/dbh.php";
    include "../Models/User.php";
    include "../Models/Bike.php";
    include "../Controllers/LoginController.php";

    include "../Controllers/BikesController.php";

    $login = new LoginController($username,$password);

    $login->loginUser();

    // If login was successful go to bikes


}