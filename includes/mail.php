<?php

if(isset($_POST['submit'])){

    $subject = $_POST['firstname'] . ' '. $_POST['lastname'] . 'Interested in the bike';
    $to = $_POST['to'];
    $message = $POST['message'];
    $headers = "From: sender@example.com";

    
    // Use the mail() function to send the email
$mailResult = mail($to, $subject, $message, $headers);

// Check if the email was sent successfully
if ($mailResult) {
    echo "Email sent successfully!";
} else {
    echo "Error sending email.";
}

}