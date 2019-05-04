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
    if(!isset($_SESSION['USERNAME'])){
      header("location: Login_Form.php"); exit;
    }
    include "Navigation.php";
  ?>

  <div class="container-fluid">

    <main class="main-index">
      <section>
        <div id="qm_Carousel_Home" class="carousel slide" data-ride="carousel">
        <!-- Carousel Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#qm_Carousel_Home" data-slide-to="0" class="active"></li>
            <li data-target="#qm_Carousel_Home" data-slide-to="1"></li>
            <li data-target="#qm_Carousel_Home" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="Images/carousel/carBeverage.jpeg" alt="carBeverage.jpeg" style="width:100%;">
            <div class="carousel-caption" id="CarCaptionWelcome">
            </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="Images/carousel/carPasta.jpg" alt="carPasta.jpg" style="width:100%;">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="Images/carousel/carPizza.jpg" alt="carPizza.jpg" style="width:100%;">
            </div>
          </div><!-- "carousel-inner" -->

          <!-- Carousel Control Arrows: Previous and Next -->
          <a class="carousel-control-prev" href="#qm_Carousel_Home" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>

          <a class="carousel-control-next" href="#qm_Carousel_Home" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>

          </div> <!-- qm_Carousel_Home -->
          <!-- carousel -->
          <div id="qmWelcome">
            <h1 id="welcome">Welcome Tuscany Italian Restaurant!</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi consequatur, perferendis hic cum nobis saepe quisquam ducimus ipsum incidunt, vel voluptates provident vero. Hic autem corrupti ab et, quo inventore beatae. Rerum tempore quod maiores qui eos dolor perferendis, quis laborum odio, facere voluptatem sit minima laboriosam repellat consequatur a!</p>
          </div>
      </section><!--slider-->

      <section>
        <div class="card-deck">
            <div class="card text-center">
              <img class="card-img-top" src="Images/cards/bvCoke.jpg" alt="bvCoke.jpg">
                <div class="card-body">
                  <h5 class="card-title">Coke</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <button type="button" class="btn btn-primary">View</button>
                </div>
            </div>
            <div class="card text-center">
              <img class="card-img-top" src="Images/cards/paLasagna.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Lasagna</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <button type="button" class="btn btn-primary">View</button>
                </div>
            </div>
            <div class="card text-center">
              <img class="card-img-top" src="Images/cards/pzPepperoni.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Pepperoni</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <button type="button" class="btn btn-primary">View</button>
                </div>
            </div>
        </div>

      </section><!--cards-->
    </main>

    <!-- <footer class="bg-warning"> -->
    <footer>
      <div class="row" style="height:80px;">
        <div class="col-sm-4 text-center" style="background-color:lavender;">
          <a href="Contact.php" class="nav-link text-dark">Contact Us</a>
        </div>
        <div class="col-sm-4 text-center">
              <button type="button" class="btn btn-primary">Switch to dark mode</button>
        </div>
        <div class="col-sm-4 text-center" style="background-color:lavender;">
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-linkedin"></a>
          <a href="#" class="fa fa-instagram"></a>
        </div>
      </div>
      <div class="row1">
        <div class="col-sm-12 text-center">@2019 Copyright: Em Thavrak</div>
      </div>
    </footer> <!--container-->


</body>
</html>
