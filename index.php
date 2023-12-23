<?php
require_once("includes/CSRF.php");

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BikeTrader</title>
    <link rel="icon" href="public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/styles/index.css">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

</head>
<body>
      
            <div class="login justify-content-center">
            <h1>Login / <a href="register.php">Register</a></h1>
             <form action="includes/login.inc.php" method="post">
                <!-- <?php ;?> -->
                <input type="hidden" name="token" value="<?php echo CSRF::create_token() ?? '' ?>">
                <div>
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div>   
                    <input type="text" name="password" placeholder="Password">
                </div>
                <div>
                    <button type="submit" name="submit">Login</button>
                </div>
                </form>
            </div>
            
       
</body>
</html>