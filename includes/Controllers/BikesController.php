<?php

class BikesController extends Bike {

    private $bike_id;
    private $bike_name;
    private $bike_cost;
    private $bike_description;


    // public function __construct()
    // {
    //     $this->bike_name = $bike_name;
    //     $this->bike_cost = $bike_cost;
    //     $this->bike_description = $bike_description;
        
    // }

    public function bikes() {

        //list of all bikes

        $bikes = $this->allBikes();
        return $bikes;
       
 
    }

    public function show($bikeId)
    {
        
        $bike = $this->find($bikeId);
        
        //store this variable within the session
        return $bike;


    }


    public function storeBike($bike_name,$bike_cost,$bike_description,$bike_image,$bike_pictures) 
    {
        
        // $bike_names = var_dump($this->bike_name);
        // if insert is ok, store the images in the assets folder
        // $bike_image = image name + date;
        // now save the file in the assets folder
        $target_dir = "../public/";
        $target_file_bike_image = $target_dir . basename($_FILES['bike_image']['name']);
       

        $target_file_bike_pictures = $target_dir . basename($_FILES['bike_image']['name']);
        
        // var_dump($target_file_bike_image);
        // exit();


        if (move_uploaded_file($_FILES["bike_image"]["tmp_name"],$target_file_bike_pictures)) {
            echo "The bike image has been uploaded";
            // header("location: ../home.php");
        } else {
            echo "Failed to upload";
            // header("location: ../sell.php") ;
        } 

    //    if (move_uploaded_file($_FILES['bike_pictures']['tmp_name'],$target_file_bike_image)) {
    //         echo "The bike image has been uploaded";
    // }  else {
    //     header("location: ../sell.php");
    //    } 
        var_dump("File upload");
        // exit();
        // $this->insertBike($bike_name,$bike_cost,$bike_description,$bike_image,$bike_pictures);
        
        // header("location: ../home.php");

        exit();

             
    }

    
    public function bikeEnquire($buyer_email, $buyer_name, $bike_id,$buyer_contact,$buyer_message) {

        // send mail to the requested user , no need to save in the DB
        $to = 'test@email.com';

$subject = 'Hola';

$message = 'This is a test email.';

    mail($buyer_email, 'Interested in the bike', $buyer_message);

        $this->enquire($buyer_email, $buyer_name, $bike_id,$buyer_contact,$buyer_message);

    }

    

   


}