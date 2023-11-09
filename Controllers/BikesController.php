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
        
        $this->insertBike($bike_name,$bike_cost,$bike_description,$bike_image,$bike_pictures);

        header("location: ../home.php");

        exit();

             
    }

    
    public function bikeEnquire($buyer_email, $buyer_name, $bike_id,$buyer_contact,$buyer_message) {

        // send mail to the requested user , no need to save in the DB
        $this->enquire($buyer_email, $buyer_name, $bike_id,$buyer_contact,$buyer_message);

    }

    

   


}