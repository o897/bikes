<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="public/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="public/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="public/styles/index.css">

</head>

<body>
    <div class="container">
        <div class="form">
            <div class="login">

                <h1>Signup / <a href="index.php">Login</a></h1>
                <form action="includes/signup.inc.php" method="post">
                    <div class="formfield">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="username" placeholder="Username">
                    </div>
                    <div class="formfield">
                        <i class="fa-solid fa-envelope"></i>
                        <input name="email" type="text" placeholder="Email">
                    </div>
                    <div class="formfield">
                        <i class="fa-solid fa-envelope"></i>
                        <input name="contact" type="text" placeholder="Contact">
                    </div>
                    <div class="formfield">
                        <i class="fa-solid fa-lock"></i>
                        <input name="password" type="password" placeholder="Password">
                    </div>
                    <div class="formfield">
                        <i class="fa-solid fa-check"></i>
                        <input name="password2" type="password" placeholder="Confirm password">
                    </div>
                    <button type="submit" name="submit">Signup</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>