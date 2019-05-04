<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tuscany Italian Restaurant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="tuscany.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php
      session_start();
      /*if(!isset($_SESSION['USERNAME'])){
        header("location: Login_Form.php"); exit;
      }*/
      include "Navigation.php";
    ?>

    <main>

      <h1 id="welcome">Pizza</h1>
      <div class="container">
        <div class="text-center grid-item">
          <div class="card text-center">
            <img class="card-img-top" src="Images/cards/pzSupreme.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Supreme</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
          </div>
        </div>
        <div class="text-center grid-item">
          <div class="card text-center">
            <img class="card-img-top" src="Images/cards/pzHawaiian.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Hawaiian</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
          </div>
        </div>
        <div class="text-center  grid-item">
          <div class="card text-center">
            <img class="card-img-top" src="Images/cards/pzPepperoni.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Pepperoni</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
          </div>
        </div>
        <div class="text-center grid-item">
          <div class="card text-center">
            <img class="card-img-top" src="Images/cards/pzSupreme.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Supreme</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
          </div>
        </div>
        <div class="text-center grid-item">
          <div class="card text-center">
            <img class="card-img-top" src="Images/cards/pzHawaiian.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Hawaiian</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
          </div>
        </div>
      </div><!-- <div class="container"> -->

  </main>

    <?php include "Footer.php"; ?>

  </body>
</html>
