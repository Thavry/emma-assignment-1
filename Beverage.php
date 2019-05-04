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
    <nav class="navbar navbar-expand-lg bg-warning navbar-dark sticky-top">
      <a class="navbar-brand text-dark font-weight-bold" href="Template.php"><h2>Tuscany Italian Restaurant</h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <!-- <div>Homepage</div> -->
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link text-dark" href="Beverage.php">Beverage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="Pasta.php">Pasta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="Pizza.php">Pizza</a>
          </li>
        </ul>
        <form class="form-inline">
          <button type="button" class="btn btn-outline-primary">
            <a href="Login_Form.php">Login</a>
          </button>
          <button type="button" class="btn btn-outline-success">
            <a href="Register_Form.php">Register</a>
          </button>
        </form>
      </div>
    </nav>

    <main>

      <h1 id="welcome">Beverage</h1>
      <div class="container">
        <div class="text-center grid-item">
          <div class="card text-center">
            <img class="card-img-top" src="Images/cards/bvCoke.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Coke</h5>
                <p class="card-text">$12.00</p>
              </div>
          </div>
        </div>
        <div class="text-center grid-item">
          <div class="card text-center">
            <img class="card-img-top" src="Images/cards/bvOrangeJuice.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Orange Juice</h5>
                <p class="card-text">$12.00</p>
              </div>
          </div>
        </div>
        <div class="text-center  grid-item">
          <div class="card text-center">
            <img class="card-img-top" src="Images/cards/bvTequila.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Tequila</h5>
                <p class="card-text">$12.00</p>
              </div>
          </div>
        </div>
        <div class="text-center grid-item">
          <div class="card text-center">
            <img class="card-img-top" src="Images/cards/bvCoke.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Coke</h5>
                <p class="card-text">$12.00</p>
              </div>
          </div>
        </div>
        <div class="text-center grid-item">
          <div class="card text-center">
            <img class="card-img-top" src="Images/cards/bvOrangeJuice.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Orange Juice</h5>
                <p class="card-text">$12.00</p>
              </div>
          </div>
        </div>
      </div><!-- <div class="container"> -->

  </main>

    <footer>
        <div class="row" style="height:80px">
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
    </footer>

  </body>
</html>
