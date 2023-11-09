<?php



class LoginController extends User {

   private $username;
   private $password;

    public function __construct($username, $password) {

     
       $this->username = $username;
       $this->password = $password;
      
        
    }

    public function loginUser() {
      
       
        if (!empty($this->username) && !empty($this->password)) {
        
            // The login method executes from within the User model
            $this->login($this->username,$this->password);
            
            header("location: ../home.php");

            exit();

        } else {
            header("location: ../home.php?=emptyinput");
            exit();
        }
    }
}