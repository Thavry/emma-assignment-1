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

      <h1><center>User Registration</center></h1>
      <br>
      <div class="register_main">
      <form action = "Processing.php" method = "POST">
          <table id = "user_registration" style="cellpadding:10px;">
              <tr>
                  <td>Username: </td>
                  <td><input type = "text" name = "username" required></td>
              </tr>

              <tr>
                  <td>Password: </td>
                  <td>
                      <?php
                         if(isset($_SESSION['UNMATCHED_PASSWORD_MESSAGE']))
                         {
                             echo "<div class = 'unmatched_Password'>"
                                    . "<p>Password did not match. Please try again.</p>"
                                  . "</div>";
                             unset($_SESSION['INCORRECT_PASSWORD_MESSAGE']);
                         }
                      ?>
                      <input type = "password" name = "password" required>
                  </td>
              </tr>

              <tr>
                  <td>Confirm Password: </td>
                  <td><input type = "password" name = "confirmpassword" required></td>
              </tr>

              <tr>
                  <td>Membership Type: </td>
              </tr>

              <tr>
                  <td>
                    <p><input type = "radio"
                                name = "Membership"
                                <?php
                                if (isset($membership)&&($membership=="student"))
                                    echo "checked";
                                ?>
                                value = "Student">
                          Student
                      </p>
                  <td>
                      <button type="button" class="btn btn-outline-primary">
                        <a>More info</a>
                  </td>
                  </td>
              </tr>
              <tr>
                  <td>

                      <p><input type = "radio"
                                name = "Membership"
                                <?php
                                if (isset($membership)&&($membership=="VIP"))
                                    echo "checked";
                                ?>
                                value = "VIP">
                          VIP
                      </p>
                  <td>
                          <button type="button" class="btn btn-outline-primary">
                            <a>More info</a>
                  </td>
                  </td>

              </tr>

              <tr>
                  <td>Email: </td>
                  <td><input type = "email" name = "email" required></td>
              </tr>

              <tr>
                  <td></td>
                  <td><input type = "submit" class="btn btn-success"
                             name = "register"
                             value = "register"
                             ></td>
              </tr>

          </table>
        </div>
      </form>

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
