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

      include "Processing.php";
    ?>

    <main>

      <h1><center>User Registration</center></h1>
      <br>
      <div class="register_main">
      <form action = "Register.php" method = "POST">
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
                                if (isset($role)&&($role=="student"))
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
                                if (isset($role)&&($role=="VIP"))
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

    <?php include "Footer.php"; ?>

  </body>
</html>
