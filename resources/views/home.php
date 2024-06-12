<?php
session_start();

if (!$_SESSION) {
    header('location: ../../index.php');
}
include "../../Models/dbh.php";
include "../../Models/Bike.php";
include "../../includes/Controllers/BikesController.php";

$bikes = new BikesController();


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <link rel="icon" href="../../public/favicon.ico" type="image/x-icon">
    <link href="../../public/fontawesome/cs/all.min.cs" rel="stylesheet">
    <link href="../../public/fontawesome/js/all.min.js" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/styles/main.css">
    <link rel="stylesheet" href="../../public/styles/bootstrap.min.css">

</head>

<body>

    <?php include "../components/header.php";?>
    <!-- <li><a href="includes/logout.inc.php">Logout</a></li> -->


    <div class="container">

        <section class="hero col-lg-12">
        <i class="fa-solid fa-cart-shopping"></i>
            <!-- <img src="../../public/1096053.png" alt="bike" srcset=""> -->
            <i class="fa-solid fa-right-from-bracket"></i>
            <h1 class="">New and Used bikes for sale</h1>

            <div class="hero__card">
                <div class="hero__card-img">
                    <img src="../../public/hero-card.png" alt="">
                </div>
                <div class="hero__card-text">
                    <div class="hero__card-text-title">Bike For Rent</div>
                    <div class="hero__card-text-sub">Book your nearest</div>
                    <div class="hero__card-text-sub">Bike Today</div>

                </div>
            </div>
            <!-- When hovering tilt the image to show the bike info -->

            <!-- When Clicked redirect to show -->
            <div class="hero__bikes">
                <!-- <h1>Available bikes</h1> -->
                <?php 
        
        foreach ($bikes->allBikes() as $bikes) {
       
        ?>
                <!--  -->
                <!-- The whole car should be a link to the show page -->

                <a href="../../includes/show.php?id=<?php echo $bikes['bikeId']; ?>">
                    <div class="hero__bike-card">
                        <div class="hero__bike-card-inner d-flex">
                            <div class="hero__bike-photo">
                                <img src="../../public/assets/<?php echo $bikes['bike_image']?>" alt="">
                            </div>
                            <div class="hero__bike-details">
                                <h2 class="hero__bike-price">R <?php echo $bikes["bike_cost"]; ?></h2>
                                <p class="hero__bike-price-pm">R 2000 p/m</p>
                                <p class="hero__bike-title"><?php echo $bikes["bike_name"]; ?></p>
                                <p class="hero__bike-year"><span class="hero__bike-type">Mountain Bike</span> | 2015</p>
                                <p class="hero__bike-year">Gauteng | Mabopane</p>
                                
                                <p class="hero__bike-owner">Orapeleng Mathebula</p>
                                <!-- Like icon -->
                            </div>
                           
                        </div>
                        <div class="hero__bike-images">

                                <?php
                                    $imageArray = explode(",", $bikes["bike_pictures"]);

                                    foreach ($imageArray as $imageName) {
                                    
                                ?>
                                        <img src="../../public/assets/<?php echo $imageName; ?>" alt="bike pics">
 
                                <?php
                                    }
                                ?>
                               
                        </div>

                    </div>
                    

                </a>

           

                <?php
         } 
        
        ?>
            </div>

        </section>
    </div>


<?php include "../components/footer.php"; ?>
</body>

</html>