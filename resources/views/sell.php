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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Sell your bike</title>
    <link rel="icon" href="../../public/favicon.ico" type="image/x-icon">
    <link rel="icon" href="public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../public/styles/main.css">
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../public/styles/bootstrap.min.css">



  </head>
  <body>
  <?php include "../components/header.php";?> 

    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2>Sell your Bike !!!</h2>
        <form id="sellForm" action="../../includes/sell.inc.php" method="post" enctype="multipart/form-data">
         <input type="hidden" name="token" value="<?php echo CSRF::create_token() ?? '' ?>">

          <div class="mb-3">
            <label for="">Bike name</label>
            
            <input class="form-control" type="text" name="bike_name" required/>
          </div>
          <div class="mb-3">
            <label for="">Bike cost</label>
            <input class="form-control" type="text" name="bike_cost" required/>
          </div>
          <div class="mb-3">
            <label for="">Location</label>
            <input class="form-control" type="text" name="bike_location" required/>
          </div>
          <div class="mb-3">
            <label for="">Year</label>
            <input class="form-control" type="text" name="bike_year" />
          </div>
         
          <div class="mb-3">
            <label for="">Comments</label>
            <textarea name="bike_description" class="form-control" id="" required></textarea>
          </div>

          <!-- implement drag and drop -->
         <div class="mb-3">
            <label for="">Bike image</label>
            <input type="file" name="bike_image" id="bikeImage" data-server="../../includes/sell.inc.php" required>
          </div>
          <div class="mb-3">
            <label for="more_pictures">More Pictures</label>
            <input type="file" name="bike_pictures[]" accept="image/" id="moreBikes" multiple required> 
            <p id="message" class="text-danger"></p>
          </div>

          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

    <script>
    // Get a reference to the file input element
    const firstElement = document.querySelector('#bikeImage');
    const secondElement = document.querySelector('#moreBikes')
    // Create a FilePond instance
    const pond = FilePond.create(firstElement,{storeAsFile : true});
    const secondPond = FilePond.create(secondElement,{storeAsFile : true}); 
  </script>
  <script>
    const moreImages = document.querySelector('#moreBikes');
    const messageElement = document.querySelector('#message');

    if (moreImages.length === 5) {
      messageElement.style.display = 'none';
      document.getElementById('sellForm').submit();
    } else {
      messageElement.textContent = "Please upload five images.";
      messageElement.style.display = "block";
    };
  </script>

  <script>

    // Button onclick invoke function
// use fetch to submit files to the backend
  </script>
  </body>
</html>
