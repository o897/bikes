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
    <link rel="stylesheet" href="../../public/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="../../public/styles/main.css">
    <link rel="icon" href="../../public/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/styles/bootstrap.min.css">


</head>
<body class="about__body">
     <?php include "../components/header.php";?> 
    
    <div class="container">

       <div class="mt-3">
            <h2><strong>About:</strong></h2>
            <div>
            </div>
            
            <div>
                <p>
                Bike Trader is a revolutionary e-commerce platform dedicated to all things cycling. As a premier online marketplace,
                we bring together bike enthusiasts, sellers, and buyers from around the world, creating a vibrant community for cycling
                enthusiasts. Our platform caters to a wide range of cycling needs,
                from high-performance road bikes to rugged mountain bikes and stylish urban commuters.
                </p>
            </div>

            <div>
                <p>
                <h4><strong>Mission Statement:</strong></h4>
                At Bike Trader, our mission is to empower cyclists of all levels by providing a seamless and dynamic platform where
                they can buy, sell, and explore a diverse range of bicycles and cycling accessories. We aim to foster a global community
                that celebrates the joy of cycling and promotes sustainable transportation."
                </p>
            </div>
       </div>

      
    </div>
    
   

    <?php include "../components/footer.php";?> 
</body>
</html>