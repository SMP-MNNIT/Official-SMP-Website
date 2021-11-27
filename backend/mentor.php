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
      
      <div class="probootstrap-header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
              <span><i class="icon-location2"></i>Brooklyn, NY 10036, United States</span>
              <span><i class="icon-phone2"></i>+1-123-456-7890</span>
              <span><i class="icon-mail"></i>info@uicookies.com</span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
              <ul>
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-instagram2"></i></a></li>
                <li><a href="#"><i class="icon-youtube"></i></a></li>
                <li><a href="#" class="probootstrap-search-icon js-probootstrap-search"><i class="icon-search"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html" title="uiCookies:Enlight">Enlight</a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html">Home</a></li>
              <li><a href="courses.html">Courses</a></li>
              <li><a href="teachers.html">Teachers</a></li>
              <li class="active"><a href="events.html">Events</a></li>
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages</a>
                <ul class="dropdown-menu">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="courses.html">Courses</a></li>
                  <li><a href="course-single.html">Course Single</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                  <li class="dropdown-submenu dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span>Sub Menu</span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Second Level Menu</a></li>
                      <li><a href="#">Second Level Menu</a></li>
                      <li><a href="#">Second Level Menu</a></li>
                      <li><a href="#">Second Level Menu</a></li>
                    </ul>
                  </li>
                  <li><a href="news.html">News</a></li>
                </ul>
              </li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              
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
        <form method="get" action="mentor.php">
        
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
          <form method="get" action="mentor.php">
            <input id="btn-41" name="btn-41"type="submit" value="<?php echo $name[2] ?>" class="subbtn">
            </form> </div>

        </div>
      </section>
      <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Get your admission now!</h2>
              <a href="#" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Enroll</a>
            </div>
          </div>
        </div>
      </section>
      <footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>About The School</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro provident suscipit natus a cupiditate ab minus illum quaerat maxime inventore Ea consequatur consectetur hic provident dolor ab aliquam eveniet alias</p>
                <h3>Social</h3>
                <ul class="probootstrap-footer-social">
                  <li><a href="#"><i class="icon-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-github"></i></a></li>
                  <li><a href="#"><i class="icon-dribbble"></i></a></li>
                  <li><a href="#"><i class="icon-linkedin"></i></a></li>
                  <li><a href="#"><i class="icon-youtube"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-md-push-1">
              <div class="probootstrap-footer-widget">
                <h3>Links</h3>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Courses</a></li>
                  <li><a href="#">Teachers</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Contact Info</h3>
                <ul class="probootstrap-contact-info">
                  <li><i class="icon-location2"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
                  <li><i class="icon-mail"></i><span>info@domain.com</span></li>
                  <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
                </ul>
              </div>
            </div>
           
          </div>
          <!-- END row -->
          
        </div>

        <div class="probootstrap-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-8 text-left">
                <p>&copy; 2017 <a href="https://uicookies.com/">uiCookies:Enlight</a>. All Rights Reserved. Designed &amp; Developed with <i class="icon icon-heart"></i> by <a href="https://uicookies.com/">uicookies.com</a></p>
              </div>
              <div class="col-md-4 probootstrap-back-to-top">
                <p><a href="#" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>

    </div>
    <!-- END wrapper -->
    

    <script src="../enlight/js/scripts.min.js"></script>
    <script src="../enlight/js/main.min.js"></script>
    <script src="../enlight/js/custom.js"></script>
  </body>
</html>

      
      
      
      
      