<?php
  session_start();

  if (!$_SESSION) {
    header('location: ../../index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>BikeTrader</title>
    <!-- js -->
    <link rel="stylesheet" href="../../public/styles/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../public/styles/bootstrap.min.css">
    <link rel="icon" href="../../public/favicon.ico" type="image/x-icon">


</head>

<body>
    <?php include "../components/header.php";?>

    <div class="container">
        <div class="contact__us  mt-3">
            <h1 class="text-align-center">Contact us</h1>
            <p>Any questions or remarks ? Just write us a message</p>
        </div>

        <div class="contact__container mb-5">
            <div class="contact">
                <div class="contact__information">
                    <h2>Contact Information</h2>
                    <div class="contact__information-details">
                        <div class="contact__information-details-box">
                            <i class="fa-solid fa-phone"></i>
                            <span class="ml-5">+27 558 485 254</span>
                        </div>

                        <div class="contact__information-details-box">
                            <i class="fa-solid fa-envelope"></i>
                            <span class="ml-3">biketrader@mail.com</span>
                        </div>
                        <div class="contact__information-details-box">
                            <!-- d-flex-->
                            <div class="">
                                <i class="fa-solid fa-location-pin"></i>
                            </div>
                            <div class="contact__information-details-box-address ml-3">
                                <div>208 Maboriks Street Brighton</div>
                                <div>Mabopriksi 2015 South Africa</div>
                            </div>
                        </div>
                        <div class="contact__information-details-socials">   
                        <i class="fa-brands fa-twitter fa-2x"></i>
                        <i class="fa-brands fa-square-facebook fa-2x"></i>
                        <i class="fa-brands fa-twitch fa-2x"></i>

                        </div>
                    </div>
                </div>
                <div>

                    <div class="contact__fields">
                        <form action="../../includes/mail.php" method="post">

                        <div class="contact__fields-box mb-4">
                            <div class="d-flex flex-column">
                                <label for="firstname" class="form-label">First name</label>
                                <input type="text" name="firstname" class="contact__fields-input" require>
                            </div>
                            <div class="d-flex flex-column">
                                <label for="lastname" class="form-label">Last name</label>
                                <input type="text" name="lastname" class="contact__fields-input ml-3" require>
                            </div>
  
                        </div>

                        <div class="contact__fields-box mb-3">
                            <div class="d-flex flex-column">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" class="contact__fields-input" value="<?php echo $_SESSION['email']?>">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="contact" class="form-label">Phone number</label>
                                <input type="text" name="contact" value="<?php echo $_SESSION['contact']?>"
                                    class="contact__fields-input ml-3">
                            </div>
                        </div>

                        <div class="mb-4">
                            <div>
                                <p>Select Subject</p>
                            </div>
                            <div class="contact__fields-box-col">
                                <div class="query__box__first-row">
                                <div class="query__box">
                                    <input type="checkbox">
                                    <p>General Query</p>
                                </div>
                                <div class="query__box">
                                    <input type="checkbox">
                                    <p class="ml-3">Dealer Query</p>
                                </div>

                                </div>
                                
                                <div class="query__box__first-row">
                                <div class="query__box">
                                    <input type="checkbox">
                                    <p class="ml-3">Service Query</p>
                                </div>

                                <div class="query__box">
                                    <input type="checkbox">
                                    <p class="ml-3">Company Query</p>
                                </div>
                                </div>
                                
                                </di>

                            </div>
                            <div class="d-flex flex-column mb-2 message__box">
                                <label for="" class="form-label">Message</label>
                                <input class="contact__message" name="message" type="text" placeholder="Write your message">
                            </div>
                            <div class="message__btn">
                                <button type="submit" name="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>







        </div>
    </div>



    <?php include "../components/footer.php";?>
</body>

</html>