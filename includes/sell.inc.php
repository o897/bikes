<?php

// "submit is te name of the button
if(isset($_POST["submit"])) {
 
   



    $bike_name = $_POST['bike_name'];
    $bike_cost= $_POST['bike_cost'];
    $bike_location = $_POST['bike_location'];
    $bike_description = $_POST['bike_description'];

    $bike_image = $_FILES['bike_image'];

    $bike_pictures = $_FILES['bike_pictures'];
    
    $bike_year = $_POST['bike_year'];
    
    // First connect
    include "../Models/dbh.php";
    // We need user data
    include "../Models/User.php"; 
    // We'll be updating the Bike table
    include "../Models/Bike.php";
    // We need the controller to alter data
    include "./Controllers/BikesController.php";

    $sell_bike = new BikesController();

   
   
    // SAVE THE BIKE IN THE DB
    $sell_bike->storeBike($bike_name,$bike_cost,$bike_description,$bike_image,$bike_pictures,$bike_year);

}

