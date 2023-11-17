<!-- Model for Bikes -->
<?php
class Bike extends Dbh {

    

    public function allBikes() {
        // user sees all bikes
        $bikes = "SELECT * FROM bikes;";

        try {
            $bikes = $this->connect()->query($bikes);
            $result = $bikes->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
           exit($e->getMessage());
        }

    }

    // Bike id
    public function find($id){
        // find specific bike
        $bike = "SELECT * FROM bikes WHERE bikeId = ?;"; 

        try {
            
            $bike = $this->connect()->prepare($bike);
            $bike->execute(array($id));
            $result = $bike->fetchAll(\PDO::FETCH_ASSOC);
            

            session_start();
            $_SESSION["bikeId"] = $result[0]["bikeId"];
            $_SESSION["bikeName"] = $result[0]["bike_name"];
            $_SESSION["bikePrice"] = $result[0]["bike_cost"];

            print_r($_SESSION);
            exit();


            return $result;
        } catch(\PDOException $e) {
            exit($e->getMessage());
        }

    }

    public function validateUser() {
        // is user logged in, use sessions to check if user logged in

    }
    public function member($id) {
        // take all this from the session
        $statement = 'SELECT id,balance FROM users WHERE id = ? and memberId = ?';
        
    }

    // To be implemented
    // public function hire($bikeId,$memberId,$balance) {
    //     /*
    //     *this will update the "hired" table to show the bikes is hired
    //     *if bike is hired it shouldn't be able to be hired agin ('validation required')
    //     */
    //     $amount = 9000;
    //     $userbalance = $this->connect()->prepare("SELECT balance FROM users WHERE member_id = ?");

    //     if(!$userbalance->execute(array($balance)) < $amount ) {
    //         // check the bike hire cost vs this member balance if true hire
    //         $userbalance = null;
    //         header("location; ../index.php?error=failfetchbalc");
    //     }
        
    //     $hireBike = $this->connect()->prepare('UPDATE bikes SET hired = "true",memberID = ? WHERE bikeId = ? ');
        
        
    // }

    public function insertBike($bike_name,$bike_cost,$bike_description,$bike_image,$bike_pictures) {
        // use details well extract from the session using their id
        $query = $this->connect()->prepare('INSERT INTO bikes (bike_name,bike_cost,bike_description,bike_image,bike_pictures) VALUES (?, ?, ?,?,?);');


        if(!$query->execute(array($bike_name,$bike_cost,$bike_description,$bike_image,$bike_pictures))) {
            $query = null;
            header("location; ../sell.php?error=failedToStoreBike");
        }

        // 
        header("location: ../home.php");

    }

    // enquire / buy
    public function enquire($buyer_email, $buyer_name, $bike_id,$buyer_contact,$buyer_message) {
       
        $query = $this->connect()->prepare('INSERT INTO bikes (buyer_email, buyer_name, bike_id,buyer_contact,buyer_message) VALUES (? , ? , ?, ? , ?);');

        if(!$query->execute(array($buyer_email, $buyer_name, $bike_id,$buyer_contact,$buyer_message))) {
            $query = null;
            header("location: ../show.php?error=failedToSendQuery");
        }

        header("location: ../confirmation.php");
    }

}
