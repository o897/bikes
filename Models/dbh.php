<?php
$dotenvPath = __DIR__ . '../.env';
require __DIR__ . '../../vendor/autoload.php'; // Autoload Composer packages
use Dotenv\Dotenv as Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__ . '../../');
$dotenv->load();

class Dbh {

   
    protected function connect() 
    {
        try {
            $username = "root";
            $password = "";

            //  
            $host = $_ENV['DB_HOST'] . ':' . 25066;
            $dbname = $_ENV['DB_NAME'];
            $username = $_ENV['DB_USER'];
            $password = $_ENV['DB_PASSWORD'];

            //  
            // $dbh = new PDO('mysql:host=localhost;dbname=bikes',$username,$password);
            $dbh = new PDO('mysql:host='.$host.';dbname='.$dbname.'',$username,$password);

            return $dbh;
            
        } catch(PDOException $e) {
            print "Error! " . $e->getMessage() . "<br/>";
            die();
        }
    }

}
