<?php
include "db_con.php";
session_start();
 $reg_no=$_SESSION["reg_no"];
//  echo $reg_no;
 $sql="SELECT * FROM user_profile WHERE reg_no='$reg_no'";
 $res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
 $mname=$row['name'];
 $mroom=$row['roomno'];
 $mphone=$row['phoneno'];
 $mhostel=$row['hostel'];
 $myear=$row['year'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Shradhey Pathak, MNNIT Allahabad">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Profile - SMP Mentors</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">
    <link href="../enlight/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="profile.css" rel="stylesheet">
  </head>
  <body style="background-image: url(../enlight/img/blackCar.jpeg)">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="mentor1.php">Back To Mentors</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

<main role="main" class="container">

  <div class="starter-template">
    <h1>
    <?php
                    echo $mname
                    ?>
    </h1>
    
  </div>
  <img class="bd-placeholder-img" src="pics/uk2.jpg" alt="Pic"> 
<div class="land">
    <ul>
        <li>Phone Number :
        <?php
                    if($mphone)
                    echo $mphone;
                    else
                    echo "NA";
                    ?> 
                    </li>
        <li>Registration No. : <?php
                    echo $reg_no
                    ?></li>
        <li>Email : 
        <?php
                    if($mhostel)
                    echo $mhostel;
                    else
                    echo "NA";
                    ?>
        </li>
    </ul>
</div>
</main><!-- /.container -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../enlight/js/vendor/bootstrap.bundle.js"></script> -->
    
  </body>
</html>