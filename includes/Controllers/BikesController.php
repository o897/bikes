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


    public function storeBike($bike_name,$bike_cost,$bike_description,$bike_image,$bike_pictures,$bike_year) 
    {
      $all_bikes_pictures_names = array(); 
    

    //   echo implode(",",$all_bikes_pictures_names);
    //   exit();

    //   for ($i=0;$i < count($bike_pictures);  $i++){ 
    //     # code...
    //     $all_bikes_pictures_names[] = $bike_pictures['name'][$i]; 


    //   }

    $targetDirectory = ".././public/assets/";

    move_uploaded_file($bike_image['tmp_name'],$targetDirectory . basename($bike_image['name']));


    for ($i=0; $i < count($bike_pictures) ; $i++) { 
        $target_file = $targetDirectory . basename($bike_pictures['name'][$i]); 

        move_uploaded_file($bike_pictures['tmp_name'][$i], $target_file);  
        $all_bikes_pictures_names[] = $bike_pictures['name'][$i]; 

    }
      
    $this->insertBike($bike_name,$bike_cost,$bike_description,$bike_image = $bike_image['name'],$bike_pictures= implode(",",$all_bikes_pictures_names),$bike_year);
    header('location: .././resources/views/home.php');

    exit();  
             
    }

    
    public function bikeEnquire($buyer_email, $buyer_name, $bike_id,$buyer_contact,$buyer_message) {

        // send mail to the requested user , no need to save in the DB


    mail($buyer_email, 'Interested in the bike', $buyer_message);

        // $this->enquire($buyer_email, $buyer_name, $bike_id,$buyer_contact,$buyer_message);

    }

    

   


}