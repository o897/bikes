<?php


    include "Models/dbh.php";
    include "Models/Bike.php";
    include "Models/User.php";
    include "Controllers/BikesController.php";
    include "Controllers/UserController.php";

    $bikeId = $_GET["id"];

    $findBike = new BikesController();
    $bike = $findBike->show($bikeId);

    
    

?>

