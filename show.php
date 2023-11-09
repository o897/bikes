<!-- it has session data -->
<?php
// from the session extract the showed_bike_name


include "includes/show.php"
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire bike</title>
    <link rel="stylesheet" href="public/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="public/styles/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>
<body>
    <!-- <?php include "header.php";?> -->
    
    <div class="container">
       <div class="show-info">
        <!-- Within the find method in the bike MOdel set the bikeName -->
        <h1><?php echo $_SESSION['bikeName']; ?></h1>
        </div>

    <div class="show">
        <div class="bike__image-show">
            <img src="https://bikerumor.com/wp-content/uploads/2023/04/trigon-ar01-aero-road-bike-with-dimples-01-800x600.jpg" alt="bike image" >
        </div> 
        <div class="bike__contact-owner">
            <div class="bike__contact">
                <h5>Contact the owner</h5>
                <button>Show Contact Number</button>
            </div>
            
            <div class="bike__contact-form">
                <form action="/includes/buyer.inc.php" method="post">
                    <div class="">
                        <label for="">Email</label>
                        <!-- Logged user details extract from session -->
                        <input name ="buyer_email" class="bike__contact-input" type="text" value="orapeleng@mail.com">
                    </div> 
                    <div class="">
                        <label for="">Name & Surname</label>
                        <input name="buyer_name" class="bike__contact-input" type="text" value="orapeleng">
                    </div>
                    <div class="">
                        <label for="">Mobile Number</label>
                        <input name="buyer_contact" class="bike__contact-input" type="text" value="7462462254">
                    </div>
                    <div class="">
                        <label for="Message">Message</label>
                        <textarea name="bike_message" id="" placeholder="I would like to check the availability of the 2019 Nissan GT-R Black Edition"></textarea>   
                    </div>
                    <?php echo $_SESSION['bikeName']; ?>
                    <button name="submit" type="submit" class="book-btn">Send Message</button>
                </form>
            </div>
            
        </div>  
    </div>    
    </div>
    
    
  
    
   <div class="footer">
    <h1>Footer</h1>
   </div>
</body>
</html>