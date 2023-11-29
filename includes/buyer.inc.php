<?php
   include "../Models/dbh.php";
   include "../Models/Bike.php";

   include "./Controllers/BikesController.php";
session_start();
if(isset($_POST['submit'])) {
   
    $buyer_email = $_POST['buyer_email'];
    $buyer_contact = $_POST['buyer_contact'];
    $buyer_message = $_POST['buyer_message'];

    $mailResult = mail('orapelengm239@gmail.com', "Bread", "I am hungry.", "From: pele@gmail.com");

    if(!$mailResult){
        echo "email not sent.";
    }
    exit();
    $buyer = new BikesController();
    $buyer->bikeEnquire($buyer_email, $buyer_name, $bike_id,$buyer_contact,$buyer_message);





}