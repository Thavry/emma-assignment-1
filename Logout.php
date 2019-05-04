<?php
    if(isset($_POST['logout']))
    {
       session_start();
       session_destroy();
       unset($_SESSION['USERNAME']);
       header("location: ".$_SERVER['HTTP_REFERER']);
       exit;
    }
?>
