<?php

if(isset($_POST['login']))
{
   session_start();
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);

   $password = md5($password);
   $sql =   "SELECT *"
           . " FROM `members`"
           . " WHERE username = '$username'"
           . " AND password = '$password'";

   $record = mysqli_query($conn, $sql);

   if(mysqli_num_rows($record)==1)
   {
       $result = mysqli_fetch_array($record, MYSQLI_ASSOC);

       //'Username' should come from the column name of the actual table
       $_SESSION['USERNAME'] = $result['Username'];
       $_SESSION['MEMBERSHIP'] = $result['Membership Type'];
   }
   else
   {
       $_SESSION['INCORRECT_PASSWORD_MESSAGE'] = "FAIL";
   }
   header("location: ".$_SERVER['HTTP_REFERER']);
   exit;
}
?>
