<form class = "username"
      action = "Login.php" 
      method = "POST">
    <p>
        <?php
            if(isset($_SESSION['USERNAME']))
            {
                echo "You are logged in as " .
                    $_SESSION['USERNAME'];

            }
        ?>
    </p>
    <p>
        <input type = "submit"
               name ="logout"
               value = "Logout"
               >
    </p>
</form>
