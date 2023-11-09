<?php


if(isset($_POST['submit'])) {

    $buyer_email = $_POST['buyer_email'];
    $buyer_name = $_POST['buyer_name'];
    $bike_id = $_POST['bike_id'];
    $buyer_contact = $_POST['buyer_contact'];
    $buyer_message = $_POST['buyer_message'];

    $buyer = new BikesController();
    $buyer->bikeEnquire($buyer_email, $buyer_name, $bike_id,$buyer_contact,$buyer_message);





}