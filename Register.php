<?php

  include "Processing.php";

  session_start();
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);
  $membership = mysqli_real_escape_string($conn, $_POST['Membership']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);


  if($password == $confirmpassword) {
     // create user
     // hash password before storing for security purposes
     $password = md5($password);
     $sql = "INSERT INTO `members`(`Username`"
                             . " , `Password`"
                             . " , `Role`"
                             . " , `Email`"
                     . ") VALUES ( '$username'"
                              . ", '$password'"
                              . ", '$membership'"
                              . ", '$email')";

     mysqli_query($conn, $sql);
     // $_SESSION['USERNAME'] = $username;
     // $_SESSION['MEMBERSHIP'] = $membership;
  }
  else
  {
     $_SESSION['UNMATCHED_PASSWORD_MESSAGE'] = "FAIL";
  }
  header("location: Template.php"); exit;
?>
