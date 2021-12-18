<?php 
include 'db_con.php';
$sql="SELECT * FROM events";
$res=mysqli_query($con,$sql);
$ronum=mysqli_num_rows($res);
while($row=mysqli_fetch_assoc($res)){
  $data[]=$row;
}
include 'auth2.php';
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

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

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
              <h1>Contact Us</h1>
              <p style="font-weight: 500; font-size: 16px;">SMP mail id:mentorshipmnnit@gmail.com</p>
            </div>
          </div>
        </div>
      </section>      
      <section class="probootstrap-section">
      
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Contact Our Qualified Faculty</h2>
              <p class="lead">Here is the team who has been there for smp</p>
            </div>
          </div>
          <!-- END row -->

          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="http://www.mnnit.ac.in/images/newstories/2017/Paulson.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Prof. Paulson Samuel</h3>
                  <p>Dean Student Welfare</p>
                  <ul class="probootstrap-footer-social">
                    <li class=""><a href="+91-532-2271409(O)"><i class="icon-phone"></i></a>+91-532-2271409(O)</li><br>
                    <li class="google-plus"><a href="paul@mnnit.ac.in"><i class="icon-google-plus"></i></a>	paul@mnnit.ac.in</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="http://www.mnnit.ac.in/images/newstories/A_Kumar.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                <h3>Dr. Abhishek Kumar </h3>
                  <p>Faculty Incharge</p>
                  <ul class="probootstrap-footer-social">
                    <li class=""><a href="+91-532-2271209 (O)"><i class="icon-phone"></i></a>+91-532-2271209 (O)</li><br>
                    <li class="google-plus"><a href="abhishek@mnnit.ac.in"><i class="icon-google-plus"></i></a>	abhishek@mnnit.ac.in</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="http://www.mnnit.ac.in/images/stories/faculty_photo/civil/KV_Photo.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                <h3>Dr. Kumar Venkatesh </h3>
                  <p>Faculty incharge</p>
                  <ul class="probootstrap-footer-social">
                    <li class=""><a href="+91-532-2271312 (O)"><i class="icon-phone"></i></a>	+91-532-2271312 (O)</li><br>
                    <li class="google-plus"><a href="	venkatesh@mnnit.ac.in"><i class="icon-google-plus"></i></a>	venkatesh@mnnit.ac.in</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>
      <section class="probootstrap-section">
      
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Meet our web team</h2>
              <p class="lead">Here is the team who has helped make this website</p>
            </div>
          </div>
          <!-- END row -->

          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="../enlight/img/person_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Shradhey Pathak</h3>
                  <p>Third year</p>
                  <ul class="probootstrap-footer-social">
                    <li class="google-plus"><a href="shradhey.pathak@mnnit.ac.in"><i class="icon-google-plus"></i></a>shradhey.pathak@mnnit.ac.in</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="../enlight/img/person_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                <h3>Abhishek Kumar Pathak</h3>
                  <p>Third year</p>
                  <ul class="probootstrap-footer-social">
                    <li class="google-plus"><a href="AbhishekK12@mnnit.ac.in"><i class="icon-google-plus"></i></a>AbhishekK12@mnnit.ac.in</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="../enlight/img/person_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Abhijeet Pandey</h3>
                  <p>Third Year</p>
                  <ul class="probootstrap-footer-social">
                    <li class="google-plus"><a href="abhijeet.pandey@mnnit.ac.in"><i class="icon-google-plus"></i></a>abhijeet.pandey@mnnit.ac.in</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="../enlight/img/person_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Kopal Jain</h3>
                  <p>Second year</p>
                  <ul class="probootstrap-footer-social">
                    <li class="google-plus"><a href="kopal.20203078@mnnit.ac.in"><i class="icon-google-plus"></i></a>kopal.20203078@mnnit.ac.in</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="../enlight/img/person_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                <h3>Krishn Kant Agrawal</h3>
                  <p>Second year</p>
                  <ul class="probootstrap-footer-social">
                    <li class="google-plus"><a href="krishn.20208068@mnnit.ac.in"><i class="icon-google-plus"></i></a>krishn.20208068@mnnit.ac.in</li>
                  </ul>
                </div>
              </div>
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

      
      
      
      
      