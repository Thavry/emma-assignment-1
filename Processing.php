<?php
   // connect to database
   $conn = mysqli_connect("localhost", "root", "", "Tuscany");

   include 'Login_Form.php';
   include 'Register.php';
   include 'Logout.php';
