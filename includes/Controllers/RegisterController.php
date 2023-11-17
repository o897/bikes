<?php


class SignupController extends User {

    private $username;
    private $contact;
    private $password;
    private $password2;
    private $email;

    // If a variable is passed throughout the constructor but it is not assigned , it will just be there waiting for a ride
    // 
    // 
    public function __construct($username,$password,$password2,$email,$contact) 
    {
        $this->username = $username;
        $this->password = $password;
        $this->password2 = $password2;
        $this->email = $email;
        $this->contact = $contact;

    }

    public function signupUser() {

        if (!$this->passwordMatch()) {
            header("location: ../index.php?error=pswdnomatch");
            exit();
        }

       

        if (!$this->validateEmail()) {
            header("location: ../index.php?error=invalidemail");
            exit();
        }

        // if (!$this->validateUsername()) {
        //     header("location: ../index.php?error=invalidusername");
        //     exit();
        // }

        // User already exist
        if ($this->uidTakenCheck()) {
            header("location: ../index.php?error=uidTaken");
            exit();
        
        }

        $this->setUser($this->username,$this->password,$this->email,$this->contact);
        // header("location: ../home.php");

    }

    public function passwordMatch() {
        return ($this->password == $this->password2) ? true : false;
        
    }

    public function validateEmail() {
        return filter_var($this->email,FILTER_VALIDATE_EMAIL) ? true : false;
    }

    // public function validateUsername()
    // {
    //     return preg_match("/^[a-zA-Z0-9]*$/",$this->username) ? true : false;

    // }

    public function uidTakenCheck() {
        return ($this->checkUser($this->username, $this->email)) ? true : false;
    }

}    