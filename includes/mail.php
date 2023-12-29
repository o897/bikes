<?php
require_once('CSRF.php');
require "../vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$dotenvPath = __DIR__ . '../.env';
use Dotenv\Dotenv as Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__ . '../../');
$dotenv->load();

if (isset($_POST['submit'])) {

    
$token = filter_input(INPUT_POST,'token',FILTER_SANITIZE_STRING);

   
if(CSRF::validate_token($token)) {

try {


$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;


$mail->Host = $_ENV['SMTP_HOST'];
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
$mail->Port = 2525;

$mail->Username = $_ENV['SMTP_USERNAME'];
$mail->Password = $_ENV['SMTP_PASSWORD'];

$mail->setFrom($_POST['email'],$_POST['firstname'] . ' ' . $_POST['lastname']);
$mail->addAddress("orapelengm239@gmail.com",'Pele');

$mail->Subject = $_POST['contact'] . "Buyer";
$mail->Body = $_POST['message'];

$mail->send();

echo "mail sent";

} catch (\Throwable $th) {
    //throw $th;
    echo $th . ' ' . "Mail not sent.";
    exit();
}

} else {
    echo '<p class="error">Error: invalid form submission</p>';
    header($_SERVER['SERVER_PROTOCOL'] . '405 Method Not Allowed');
    exit();
}



}




       
    

