<?php
  session_start();
  $sessionStatus = session_status();

// Check if the session is active
if ($sessionStatus == PHP_SESSION_ACTIVE) {
    echo "Session is active!";
} else {
    echo "Session has not started or is disabled.";
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sell your bike</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../../public/styles/main.css">
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />


  </head>
  <body>
  <?php include "../components/header.php";?> 

    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2>Sell your Bike !!!</h2>
        <form action="includes/sell.inc.php" method="post" enctype="multipart/form-data">
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
            <input class="form-control" type="text" name="year" />
          </div>
          <div class="mb-3">
            <label for="">Year</label>
            <input class="form-control" type="text" name="year" required/>
          </div>
          <div class="mb-3">
            <label for="">Comments</label>
            <textarea name="bike_description" class="form-control" id="" required></textarea>
          </div>

          <!-- implement drag and drop -->
         <div class="mb-3">
            <label for="">Bike image</label>
            <input type="file" name="bike_image" required>
          </div>
          <div class="mb-3">
            <label for="more_pictures">More Pictures</label>
            <input type="file" name="bike_pictures" required> 
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        
      </div>
    </div>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

    <script>
    // Get a reference to the file input element
    const inputElement = document.querySelector('input[type="file"]');

    // Create a FilePond instance
    const pond = FilePond.create(inputElement);
  </script>

  </body>
</html>
