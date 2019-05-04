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
      if(isset($_SESSION['USERNAME'])){
        header("location: Template.php"); exit;
      }
      include "Navigation.php";
    ?>

    <main class="main-login">

      <form class = "login_form"
            action = "Login.php"
            method = "POST">
            <h1>Log In</h1>
            <br>

      <div class="login_section">

      <?php
         if(isset($_SESSION['INCORRECT_PASSWORD_MESSAGE']))
         {
             echo "<div class = 'incorrect_Password'>"
                    . "<p>Incorrect username and/or password. Please try again.</p>"
                  . "</div>";
             unset($_SESSION['INCORRECT_PASSWORD_MESSAGE']);
         }
      ?>

      <p class="username_placeholder">
        <input type = "text"
                name = "username"
                placeholder ="Username *"
                required>
      </p>
      <p class="username_placeholder">
        <input type = "password"
                name = "password"
                placeholder ="Password *"
                required>
      </p>

      <p class="submit_button">
        <input type = "submit" class="btn btn-success"
                name = "login"
                value = "Login"
                >

      </p>
      <p>
          Don't have an account? <a href = "Register.php">Register</a>
      </p>

      </form>

      </div>
    </div>
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
