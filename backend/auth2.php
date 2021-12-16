<?php
session_start();
if(!isset($_SESSION['user_id']))
      $loggedin=false;
    //   header("location: signin.php");

      else
      $loggedin=true;
?>