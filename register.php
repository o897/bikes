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
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <link rel="stylesheet" href="public/js/fontawesome.min.js">
    <link rel="stylesheet" href="public/styles/index.css">

</head>

<body>
    <div class="container">
        <div class="form">
            <div class="login">

                <form action="includes/signup.inc.php" method="post">
                    <input type="hidden" name="token" value="<?php echo CSRF::create_token() ?? '' ?>">

                    <h1>Register</a></h1>
                    <div class="formfield">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="username" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="formfield">
                        <i class="fa-solid fa-envelope"></i>
                        <input name="email" type="text" placeholder="Email" autocomplete="off">
                    </div>
                    <div class="formfield">
                        <i class="fa-solid fa-envelope"></i>
                        <input name="contact" type="text" placeholder="Contact" autocomplete="off"
                        >
                    </div>
                    <div class="formfield">
                        <i class="fa-solid fa-lock"></i>
                        <input name="password" type="password" placeholder="Password" autocomplete="off">
                    </div>
                    <div class="formfield">
                        <i class="fa-solid fa-check"></i>
                        <input name="password2" type="password" placeholder="Confirm password" autocomplete="off">
                    </div>
                    <button type="submit" name="submit"><strong>Signup</strong></button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>