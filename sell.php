<?php
  session_start();
  

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
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2>Sell your Bike !!!</h2>
        <form action="includes/sell.inc.php" method="post">
          <div class="mb-3">
            <label for="">Bike name</label>
            <input class="form-control" type="text" name="bike_name" />
          </div>
          <div class="mb-3">
            <label for="">Bike cost</label>
            <input class="form-control" type="text" name="bike_cost" />
          </div>
          <div class="mb-3">
            <label for="">Description</label>
            <textarea name="bike_description" class="form-control" id=""></textarea>
          </div>

         <div class="mb-3">
            <label for="">Bike image</label>
            <input class="form-control" type="file" name="bike_image">
          </div>
          <div class="mb-3">
            <label for="more_pictures">More Pictures</label>
            <input class="form-control" type="file" name="more_pictures"> 
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        
      </div>
    </div>
  </body>
</html>

<!-- 
   <div class="">
            <div class="login">
            <h1>Login</h1>
             <form action="includes/login.inc.php" method="post">
                <input type="text" name="username" placeholder="Username">
                <input name="password" type="text" placeholder="Password">
                <button type="submit" name="submit">Login</button>
                </form>
            </div>
        </div>
 -->