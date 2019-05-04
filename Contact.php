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
            <a href="Login.php">Login</a>
          </button>
          <button type="button" class="btn btn-outline-success">
            <a href="Register.php">Register</a>
          </button>
        </form>
      </div>
    </nav>

    <main>

      <center><h1>Contact Us</h1></center>
        <br>
        <div class="container-fluid contact-main">
          <div class="contact">
            <div class="contact_detail">
              <h3><i><u>Opening Hours</u></i></h3>
              <br>
              <p>Monday to Wednesday
              <br>Dinner: 5pm to 9pm</p>
              <p>Thursday to Saturday
              <br>Dinner: 5pm to 10pm</p>
              <p>Sunday
              <br>Lunch: 12pm to 3pm</p>

            </div>

          </div>

        </div>

      <br><br>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <div class="address-detail">
            <h3>Address</h3>
            <p>123 Street, Any Road, Any Suburb, NSW 1111</p>
            <h3>Phone Number</h3>
            <p>(02) 00 000 000</p>
            <h3>Email</h3>
            <p>info@tuscany.com.au</p>
          </div>
          </div>
          <div class="col-md-8">
            <div id="googleMap" style="width:100%; height:400px;">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26502.202618774823!2d151.18727839618842!3d-33.86968061196632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae3f3298a729%3A0xef50fa5572780602!2sSydney+CBD%2C+NSW!5e0!3m2!1sen!2sau!4v1556586520749!5m2!1sen!2sau" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>

          </div>
        </div>
        </div>
        </div>


  </main>

    <footer>
        <div class="row footer" style="height:80px">
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
