<?php

class UserController extends Bike {
    private $member; //status

    public function bikes() {

        //list of all bikes
        $bikes = $this->bikes();
        return $bikes;
 
    }

    // show specific bike SHOW if member
    public function hireBike($id) {
        // if returns true user able to hire bike
        //login first to hire
        if ($this->member($id)) {
            header("location: ../show.php");
        } else {
            header("location: ../registration.php?error=notloggedin");
        }

    }

    // specific bike hired
    public function update($id) {
        //is the bike hired, member balance 
        if ($this->member($id)) {
            # check the hire cost for the bike and the user cost if true update the model
        } else {
            #user not have enough credit
        }

    }

    public function addBuyer() {
        //add buyer to database
        // Buyer's Table



    }


}