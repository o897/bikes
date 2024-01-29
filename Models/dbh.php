<?php
use Dotenv\Dotenv as Dotenv;
// $dotenvPath = __DIR__ . '../.env';
require __DIR__ . '../../vendor/autoload.php'; // Autoload Composer packages
$dotenv = Dotenv::createImmutable(__DIR__ . '../../');
$dotenv->load();

// $_ENV['DB_HOST']     
// $_ENV['DB_NAME']     
// $_ENV['DB_USER']     
// $_ENV['DB_PASSWORD'] 
// $_ENV['DB_PORT']

// getenv
// getenv('DB_HOST');
// getenv('DB_NAME');
// getenv('DB_USER');
// getenv('DB_PASSWORD');
// getenv('DB_PORT');

class Dbh {

    protected function connect() {
        $host =  $_ENV['DB_HOST'];       
        $dbname =  $_ENV['DB_NAME'];   
        $username = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASSWORD'];
        $port =  $_ENV['DB_PORT'];          
        $dsn = "mysql:host=$host;port=$port;dbname=$dbname;sslmode=require";
         

        try {
            $dbh = new PDO($dsn, $username, $password);
        
           return $dbh;
        
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

}
