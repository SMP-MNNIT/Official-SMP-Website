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
 if(!isset($_SESSION['user_id'])){
  $loggedin=false;
  header("location: signin.php");
}
  else
  $loggedin=true;
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>uiCookies:Enlight &mdash; Free Bootstrap Theme, Free Responsive Bootstrap Website Template</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../enlight/css/styles-merged.css">
    <link rel="stylesheet" href="../enlight/css/style.min.css">
    <link rel="stylesheet" href="../enlight/css/custom.css">

    <style>
     li{
       color: black;
       font-size: 14px;
     }
     @media screen and (min-width: 600px) {
      li{
       color: black;
       font-size: 21px;
     }
}
    </style>

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php
                        if(isset($_GET['btn-2']))
                        {
                            $_SESSION["reg_no"]=$_SESSION["syid"];
                            // echo $_SESSION["reg_no"];
                            header("location: profile.php");
                        }
                       else if(isset($_GET['btn-3']))
                       {
                       $_SESSION["reg_no"]=$_SESSION["tyid"];
                    //    echo $_SESSION["reg_no"];
                       header("location: profile.php");
                       }
                       else if(isset($_GET['btn-41']))
                       {
                       $_SESSION["reg_no"]=$_SESSION["fyid1"];
                    //    echo $_SESSION["reg_no"];
                       header("location: profile.php");
                       }
                       else if(isset($_GET['btn-42']))
                       {
                       $_SESSION["reg_no"]=$_SESSION["fyid2"];
                    //    echo $_SESSION["reg_no"];
                       header("location: profile.php");
                       }
                       else if(isset($_GET['btn-43']))
                       {
                       $_SESSION["reg_no"]=$_SESSION["fyid3"];
                    //    echo $_SESSION["reg_no"];
                       header("location: profile.php");
                       }
                       else if(isset($_GET['btn-44']))
                       {
                       $_SESSION["reg_no"]=$_SESSION["fyid4"];
                    //    echo $_SESSION["reg_no"];
                       header("location: profile.php");
                       }
                       
                   ?>
    <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div>
    
    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->
      
     
      <?php include 'navbar.php' ?>
      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
            <h2><?php
                    echo $mname
                    ?></h2>
            </div>
          </div>
        </div>
      </section>      
      <section class="probootstrap-section">
      
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              
              
            </div>
          </div>
          <!-- END row -->

          <div class="row" >
            <div class="listtitem">
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
        <hr>

            </div>
            

        </div>
      </section>
      
      <?php include 'footer.php' ?>

    </div>
    <!-- END wrapper -->
    

    <script src="../enlight/js/scripts.min.js"></script>
    <script src="../enlight/js/main.min.js"></script>
    <script src="../enlight/js/custom.js"></script>
  </body>
</html>