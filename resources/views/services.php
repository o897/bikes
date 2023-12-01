<?php
  session_start();

  if (!$_SESSION) {
    header('location: .././index.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BikeTrader</title>
    <!-- js -->
    <link rel="icon" href="../../public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../public/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="../../public/styles/main.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/styles/bootstrap.min.css">


</head>

<body>
    <?php include "../components/header.php";?>

    <div class="container">

        <h1>🔧 Our Services:</h1>

        <div class="services row">

            <div class="services__image ">
                <img src="https://hips.hearstapps.com/hmg-prod/images/joel-working-0065-1579013157.jpg" alt=""
                    srcset="">
            </div>
            <div class="services__content">
                <div class="mb-2 our__service">
                    <strong>Tune-Ups: </strong><p>Bring back that smooth, silent ride with our comprehensive tune-up
                    services.</p>
                </div>
                <div class="mb-2 our__service">
                    <strong>Repairs: </strong> Flat tire? Broken chain? We've got you covered!
                </div>
                <div class="mb-2 our__service">
                    <strong>Upgrades: </strong>
                    Enhance your bike's performance with our range of upgrade options.
                </div>
                <div class="mb-2 our__service">
                    <strong>Customization:</strong>
                    Personalize your ride and stand out from the crowd.
                </div>
            </div>

        </div>

    </div>

        <?php include "../components/footer.php";?>
</body>

</html>