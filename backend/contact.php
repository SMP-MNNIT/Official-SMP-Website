<?php 
include 'db_con.php';
$sql="SELECT * FROM events";
$res=mysqli_query($con,$sql);
$ronum=mysqli_num_rows($res);
while($row=mysqli_fetch_assoc($res)){
  $data[]=$row;
}
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
            <a class="navbar-brand"  title="STUDENT MENTORSHIP PROGRAMME">
              <img  style=" height: 180%; " src="../enlight/img/smp.png " !important class="logo-image" alt="">
              </a>
          </div></br>
          
          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Home</a></li>
              <li class="active"><a href="contact.php">contact Us</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="events.php">Events</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
      
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
                  <h3>Neeraj Balani</h3>
                  <p>Final year</p>
                  <ul class="probootstrap-footer-social">
                    <li class="google-plus"><a href="paul@mnnit.ac.in"><i class="icon-google-plus"></i></a>	paul@mnnit.ac.in</li>
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
                <h3>Ayush</h3>
                  <p>Associate  Professor & Head</p>
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
                  <img src="../enlight/img/person_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Sradhey Pathak</h3>
                  <p>Professor</p>
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
                  <img src="../enlight/img/person_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Neeraj Balani</h3>
                  <p>Professor</p>
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
                  <img src="../enlight/img/person_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                <h3>Abhishek Kumar Pathak</h3>
                  <p>Associate  Professor & Head</p>
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
                  <img src="../enlight/img/person_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Abhijeet Pandey</h3>
                  <p>Professor</p>
                  <ul class="probootstrap-footer-social">
                    <li class=""><a href="+91-532-2271409(O)"><i class="icon-phone"></i></a>+91-532-2271409(O)</li><br>
                    <li class="google-plus"><a href="paul@mnnit.ac.in"><i class="icon-linkedin"></i></a>	paul@mnnit.ac.in</li>
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
                  <h3>Abhijeet Pandey</h3>
                  <p>Professor</p>
                  <ul class="probootstrap-footer-social">
                    <li class=""><a href="+91-532-2271409(O)"><i class="icon-phone"></i></a>+91-532-2271409(O)</li><br>
                    <li class="google-plus"><a href="paul@mnnit.ac.in"><i class="icon-linkedin"></i></a>	paul@mnnit.ac.in</li>
                  </ul>
                </div>
              </div>
            </div>

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
                <h3>About The SMP</h3>
                <p>Often a freshman’s life becomes a tightrope walk between diving into various co-curriculars while chugging along with the daily ordeal of academics. In an effort to foster a healthy interaction with senior students, the institute has flagged off a Student Mentorship Programme (SMP) under the aegis of the Dean Student Welfare Office. Still in its nascent stages, the initiative promises to reform the inhibitions to senior-junior interaction and constructive information flow, imposed by a plethora of reasons, both administrative and otherwise</p>
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

      
      
      
      
      