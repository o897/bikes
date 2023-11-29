<?php
session_start();

if (!$_SESSION) {
    header('location: .././index.php');
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
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="public/favicon.ico" type="image/x-icon">
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
            <!-- <img src="../../public/1096053.png" alt="bike" srcset=""> -->
            <h1 class="">New and Used bikes for sale</h1>
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
                                <!-- <img src="https://pedego.co.za/cdn/shop/products/TWIN-E.27seatL.jpg?v=1664424595" alt="" srcset="">
                                <img src="https://bike-addict.co.za/cdn/shop/collections/MG_6708_1400x.jpg?v=1623397754" alt="" srcset="">
                                <img src="https://live.staticflickr.com/65535/53167989317_2ff071d344_c.jpg" alt="" srcset="">
                                <img src="https://detourcycles.co.za/cdn/shop/products/image_def50259-d09e-4d6c-be1c-e01d8f18c482_1024x1024@2x.png?v=1617970735" alt="" srcset="">
                                <img src="https://media.bikehub.co.za/production/Media/MarketplaceItem/2023/675039/-1696935820-0128_medium.jpg" alt="" srcset="">
                                <img src="https://electrek.co/wp-content/uploads/sites/3/2021/08/spectre-main.png?w=1600" alt=""> -->
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

                <div class="hero__bike-images">
                    <!-- <img src="public/images/cannondale-topstone-neo-carbon-3-lefty-374475-1.png" alt=""> -->
                    <!-- <img src="public/images/cannondale-topstone-neo-carbon-3-lefty-374475-1.png" alt=""> -->
                </div>

                <?php
         } 
        
        ?>
            </div>

        </section>
    </div>


<?php include "../components/footer.php"; ?>
</body>

</html>