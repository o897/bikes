<?php

require_once("includes/CSRF.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BikeTrader</title>
    <link rel="icon" href="public/favicon.ico" type="image/x-icon">
    <!-- <link rel="stylesheet" href="public/styles/index.css"> -->
    <link rel="stylesheet" href="public/styles/main.css">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

</head>
<body>

    <div class="login justify-content-center">

        <div class='login-form'>
            <div class='login-form--title'>Upgrade Your</div>
            <div class='login-form--title-sub'>Ride today</div>
            <div class='login-form--sub-title'>Eplore Exclusive Offers</div>
            <div class='login-form-sub'>
            Unlock exclusive offers! Sign up for VIP access to insider deals, special promotions, and new arrivals. Join our bike community and elevate your riding experience!"
            </div>
            <div class='login-form--login-title'>Enter you credenials</div>
            <form action="includes/login.inc.php" method="post">
                <input type="hidden" name="token" value="<?php echo CSRF::create_token() ?? '' ?>">

                <div class="login-form--input">
                <label for="Username">Username</label>
                <input type="text" name="username" placeholder='test'>
                </div>
                <div class="login-form--input">
                <label for="Password">Password</label>
                <input type="text" name="password" placeholder='password'>
                </div>
                <div class="login-form--button">
                    <button type="submit" name="submit">Login</button>
                </div>               
            </form>
        </div>
        <div class="login-side">
            <img class='login-side--img' src="public/home-bike.png" alt="" srcset="">
        </div>

    </div>
    <div>
    </div>
</body>

</html>