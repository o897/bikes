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
    <link rel="icon" href="../../public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../public/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="../../public/styles/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/styles/bootstrap.min.css">


</head>
<body>
     <?php include "../components/header.php";?> 
    
    <div class="container">
       <div class="show-info">
        <!-- Within the find method in the bike MOdel set the bikeName -->
        
        <h1 class="show-info__bikeName"><?php echo $_SESSION['bikeName']; ?></h1>
        <h1 class="show-info__price">R<?php echo $_SESSION['bikePrice']; ?></h1>
        </div>

    <div class="show">
        <div class="bike__image-show">
            <div class="bike__image-show-img mb-0">
            <img src="../../public/assets/<?php echo $_SESSION['bikeImage'];?>" alt="">
                <!-- <img src="https://electrifiedreviews.com/bike-images/1644/Electrified.jpeg" alt="bike image" > -->
            </div>
            
            <div class="bike__details">
            <div class="bike__details-section">
                <div class="bike__details-section-summary mb-2 mt-2">
                <p class="text-black"><strong>Used e-bike</strong></p>
                <p>2012</p>
                <p>15km</p>

                </div>

                <h4><strong>Sellers Comments</strong></h4>
                
                <p class="comment">
                Riding an e-bike feels like having your own personal tailwind,
                turning every commute into a breeze. It's not just a mode of transportation;
                it's a daily dose of effortless adventure.
                </p>
                    <div class="mb-4">
                    <h4><strong>Bike Details</strong></h4>
                    <div class="bike__details-row bike__details-row-th">
                        <p class="th">Previous owners</p>
                        <p class="td"><strong>None</strong></p>
                    </div>
                    <div class="bike__details-row bike__details-row-td">
                        <p class="th">Service History</p>
                        <p class="td"><strong>Unknown</strong></p>
                    </div>
                    <div class="bike__details-row bike__details-row bike__details-row-th">
                        <p class="th">Color</p>
                        <p class="td"><strong>Black</strong></p>
                    </div>
                    <div class="bike__details-row bike__details-row-td">
                        <p class="th">Warranty</p>
                        <p class="td"><strong>12 months</strong></p>
                    </div>
                    </div>
              
            </div>
            </div>
        </div> 
        
        <div class="bike__contact-owner">
            <div class="bike__contact">
                <h5 id="ownerContact"><?php echo $_SESSION['contact']; ?></h5>
                <h5 id="contactOwnerLabel">Contact the owner</h5>
                <button onclick="toggleVisibility();">Show Contact Number</button> <!--onclick hide h5, change text content -->
            </div>
            
            <div class="bike__contact-form">
                <form action="../../includes/buyer.inc.php" method="post">
                    <div class="bike__contact-input pt-2">
                        <label for="">Email</label>
                        <!-- Logged user details extract from session -->
                        <input name ="buyer_email" type="text" value="<?php echo $_SESSION['email']; ?>">
                    </div> 
                    <div class="bike__contact-input">
                        <label for="">Name & Surname</label>
                        <input name="buyer_name" type="text" value="<?php echo $_SESSION['username']; ?>">
                    </div>
                    <div class="bike__contact-input">
                        <label for="">Mobile Number</label>
                        <input name="buyer_contact" type="text" value="<?php echo $_SESSION['contact']; ?>">
                    </div>
                    <div class="bike__contact-input">
                        <label for="bike_message">Message</label>
                        <textarea name="buyer_message" id="" placeholder="<?php echo('I would like to check the availability of the ') . $_SESSION['bikeName']; ?>"></textarea>   
                    </div>
                    <button name="submit" type="submit" class="book-btn">Send Message</button>
                    <div class="bike__contact-input">
                        <p class="terms">
                        By continuing I understand and agree with AutoTrader’s Terms & Conditions and Privacy Policy
                        </p>
                    </div>
                </form>

            </div>
            
        </div>  
    </div>    
    </div>
    <?php include "../components/footer.php";?> 

    <script>
        let ownerContact = document.getElementById('ownerContact');
        let contactOwnerLabel = document.getElementById('contactOwnerLabel');

        ownerContact.style.display = "none";

        function toggleVisibility() {

            if(ownerContact.style.display === "none") {
                contactOwnerLabel.style.display = "none";
                ownerContact.style.display = "block";
            }
       
            
        }
        
    </script>
</body>
</html>