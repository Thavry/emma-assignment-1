<?php
   session_start();
   session_destroy();
   unset($_SESSION['USERNAME']);
   header("location: ".$_SERVER['HTTP_REFERER']);
   exit;
?>
