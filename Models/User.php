<!-- User Model -->
<?php

class User extends Dbh {
 
    protected function setUser($username,$password,$email,$contact) {

        $query = $this->connect()->prepare('INSERT INTO users (username,password,email,contact) VALUES (?, ?, ?,?);');

        $hashPassword = password_hash($password, PASSWORD_DEFAULT);

        // If this query failed
        if (!$query->execute(array($username,$hashPassword,$email,$contact))) {
            $query = null;
            header("location: ../index.php?error=failedtoinsertuser");
            exit(); //exit the script
        }

        $query = null;
    }
    
    // Check to see if user exist
    protected function checkUser($username,$email) 
    {

        $query = $this->connect()->prepare('SELECT username FROM users WHERE username = ? OR email = ?;');

        // if fail to execute
        if(!$query->execute(array($username, $email))){
            $query = null;
            header("location; ../register.php?error=failedtoregisteruser");
            exit();
        }

        // if user exits return true or false
        $results = $query->rowCount() > 0 ? true : false ;

        return $results;    
    }
   
    public function login($username,$password) {

        // We have to veryfty the password
        $query = $this->connect()->prepare('SELECT * FROM users WHERE username = ?');

        $query->bindParam(1, $username);
        
        $query->execute();

        $user = $query->fetch();
        
        
        if($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION["username"] =  $user['username'];
            $_SESSION["email"] = $user['email'];
            $_SESSION["contact"] = $user['contact'];

            $query = null;

        } else {
            
            header("location: ../index.php?error=wrongcredentials");
            exit();
        }

        $query = null;
    }

    

    
    
}