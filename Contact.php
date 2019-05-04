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

    <?php include "Footer.php"; ?>

  </body>
</html>
