<?php 
include "db_con.php";
session_start();
$student_id=$_SESSION["user_id"];
$sql="SELECT * FROM student_mentor WHERE student_id='$student_id'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
$syid=$row["second_year_mentor"];
$tyid=$row["third_year_mentor"];
$fyid1=$row["fourth-year1"];
$fyid2=$row["fourth_year2"];
$fyid3=$row["fourth_year3"];
$fyid4=$row["fourth_year4"];
$_SESSION["syid"]=$syid;
$_SESSION["tyid"]=$tyid;
$_SESSION["fyid1"]=$fyid1;
$_SESSION["fyid2"]=$fyid2;
$_SESSION["fyid3"]=$fyid3;
$_SESSION["fyid4"]=$fyid4;
include "mentor1Inc.php";
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
     .subbtn {
	background: none;
	color: inherit;
	border: none;
	padding: 0;
	font: inherit;
	cursor: pointer;
	outline: inherit;
  font-size:20px;
}
.subbtn:hover {
	background: none;
	color: black;
	border: none;
	padding: 0;
	font: inherit;
	cursor: pointer;
	outline: inherit;
  font-size:20px;
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
                            header("location: profile2.php");
                        }
                       else if(isset($_GET['btn-3']))
                       {
                       $_SESSION["reg_no"]=$_SESSION["tyid"];
                    //    echo $_SESSION["reg_no"];
                       header("location: profile2.php");
                       }
                       else if(isset($_GET['btn-41']))
                       {
                       $_SESSION["reg_no"]=$_SESSION["fyid1"];
                    //    echo $_SESSION["reg_no"];
                       header("location: profile2.php");
                       }
                       else if(isset($_GET['btn-42']))
                       {
                       $_SESSION["reg_no"]=$_SESSION["fyid2"];
                    //    echo $_SESSION["reg_no"];
                       header("location: profile2.php");
                       }
                       else if(isset($_GET['btn-43']))
                       {
                       $_SESSION["reg_no"]=$_SESSION["fyid3"];
                    //    echo $_SESSION["reg_no"];
                       header("location: profile2.php");
                       }
                       else if(isset($_GET['btn-44']))
                       {
                       $_SESSION["reg_no"]=$_SESSION["fyid4"];
                    //    echo $_SESSION["reg_no"];
                       header("location: profile2.php");
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
            <h1>My Mentors</h1>
            </div>
          </div>
        </div>
      </section>      
      <section class="probootstrap-section">
      
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Third year Mentors</h2>
              <p class="lead">Fetch contact info of your third year mentors here:</p>
            </div>
          </div>
          <!-- END row -->

          <div class="row">
        <?php for ($i=0;$i<2;$i++){ ?>
            <?php if($name[$i]) {?>
        <div style="background: none; border: none;">
        <form method="get" action="mentor.php" style="padding-left:10rem">
        
            <input  id="btn-<?php echo $i+2 ?>" name="btn-<?php echo $i+2 ?>" type="submit" value="<?php echo $name[$i] ?>" class="subbtn" >
            </form></div><br>
            <?php } ?>
            <?php } ?>
        <hr>

            </div>
            <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Final year Mentors</h2>
              <p class="lead">These are your Mentor Team Head,feel free to contact them only in case of acute emergency</p>
            </div>
          </div>
          <div class="row">
          <form method="get" action="mentor.php" style="padding-left:10rem">
            <input id="btn-41" name="btn-41"type="submit" value="<?php echo $name[2] ?>" class="subbtn">
            </form> </div>
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

      
      
      
      
      