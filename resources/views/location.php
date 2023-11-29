<?php
session_start();
if (!$_SESSION) {
    header('location: .././index.php');
}

// When I use an env var for google api, i throws an err on google map but it still works.

// $dotenvPath = __DIR__ . '../../.env';
// require __DIR__ . '/../../vendor/autoload.php'; // Autoload Composer packages
// use Dotenv\Dotenv as Dotenv;
// $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
// $dotenv->load();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BikeTrader</title>
    <link rel="icon" href="public/favicon.ico" type="image/x-icon">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" href="../../public/styles/main.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>
<body>
     <?php include "../components/header.php";?> 
    
    <div class="container">
       <h1>Location</h1>
    <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id="googleMap" style="width:100%;height:400px;"></div>


    <script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(-25.507856, 28.017113),
  zoom:14,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>
    <!-- prettier-ignore -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_xW6vzyyhkUFzIYLaLIR_Gf0yl1HnHcI&callback=myMap"></script>

    </div>
    
   

    <?php include "../components/footer.php";?> 
</body>
</html>