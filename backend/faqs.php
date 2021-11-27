<?php 
include 'db_con.php';
$sql="SELECT * FROM faqs ";
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
    <link rel="stylesheet" href="../enlight/css/faqs.css">


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
            <a class="navbar-brand" href="index.php" title="uiCookies:Enlight">Enlight</a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Home</a></li>
              <li><a href="academics.php">Courses</a></li>
              <!-- <li><a href="teachers.html">Teachers</a></li> -->
              <li class="active"><a href="events.php">Events</a></li>
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages</a>
                <ul class="dropdown-menu">
                  <li><a href="about.html">Announcements</a></li>
                  <li><a href="courses.html">Campus Life</a></li>
                  <li><a href="course-single.html">Clubs</a></li>
                  <li><a href="gallery.html">Sports</a></li>
                  
                  <!-- <li><a href="news.html">News</a></li> -->
                </ul>
              </li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>

      
      
      <!-- <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
                <h3
            </div>
          </div>
        </div>
      </section> -->

      <!-- <section class="probootstrap-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="probootstrap-flex-block">
                            <div class="probootstrap-text probootstrap-animate">
                                <h3>About Academics</h3>
                                <p>This website has been made to introduce incoming freshers to the life at MNNIT Allahabad. Explore this website and use it to make an informed choice about your college and department. You won't feel leftout on this platform.
                                    Have fun!</p>
                                <p><a href="#" class="btn btn-primary">Learn More</a></p>
                            </div>
                            <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_3.png)">
                                 <iframe width="720" height="480" src="https://www.youtube.com/embed/Sz6YRpyefpY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                                <!-- <a href="https://www.youtube.com/watch?v=Sz6YRpyefpY" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --> 

      
      
      <!-- <section class="probootstrap-section">
        <div class="container">
    
          <div class="row">
          <?php for($i=0;$i<$ronum;$i++) {?>
        
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="academic.php?row=<?php echo $data[$i]["id"]?>" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($data[$i]["image"]); ?>" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3><?php echo $data[$i]["acad"]; ?></h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                  <span class="probootstrap-location"><i class="icon-location2"></i>Click to know more!!</span>
                </div>
              </a>
            </div>
            <?php } ?>
          </div>
        </div>
      </section> -->
      <!-- faqs  -->
      <section class="main-section">
    <div id="faqs" class="container">
      <h2 class="line-heading">Frequently Asked Questions</h2>
      <h3 class="large-heading">Some of the most common questions asked about SMP</h3>
      <div id="faqSection" class="fullwidth-container">
        <div>
        <?php for($i=0;$i<$ronum;$i++) {?>
            <button class="collapsible"> <?php echo $data[$i]["ques"]; ?></button>
          <div class="faq-content">
            <p><?php echo $data[$i]["answer"]; ?></p>
          </div>
            <?php } ?> 
        </div>
        <div>
        </div>
      </div>
    </div>
  </section>
 


      <!-- faqs -->
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
                <h3>About The Smp</h3>
                <p>Often a freshman’s life becomes a tightrope walk between diving into various co-curriculars while chugging along with the daily ordeal of academics. In an effort to foster a healthy interaction with senior students, the institute has flagged off a Student Mentorship Programme (SMP) under the aegis of the Dean Student Welfare Office. Still in its nascent stages, the initiative promises to reform the inhibitions to senior-junior interaction and constructive information flow, imposed by a plethora of reasons, both administrative and otherwise.</p>
                <h3>Social</h3>
                <ul class="probootstrap-footer-social">
                  <!-- <li><a href="#"><i class="icon-twitter"></i></a></li> -->
                  <li><a href="https://www.facebook.com/mentorshipMNNIT/" target="_blank"><i class="icon-facebook"></i></a></li>
                  <li><a href="mentorshipmnnit@gmail.com"><i class="icon-email"></i></a></li>
                  <!-- <li><a href="#"><i class="icon-dribbble"></i></a></li>
                  <li><a href="#"><i class="icon-linkedin"></i></a></li>
                  <li><a href="#"><i class="icon-youtube"></i></a></li> -->
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-md-push-1">
              <div class="probootstrap-footer-widget">
                <h3>Links</h3>
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="academics.php">Courses</a></li>
                  <li><a href="mentor.php">Mentors</a></li>
                  <!-- <li><a href="#">News</a></li> -->
                  <li><a href="contact.php">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Contact Info</h3>
                <!-- <a href="https://www.w3schools.com/" target="_blank">Visit W3Schools!</a> -->
                <ul class="probootstrap-contact-info">
                  <li><i class="icon-location2"></i> <span>Motilal Nehru National Institute of Technology, Allahabad</span></li>
                  <li><i class="icon-mail"></i><span><a href="https://mail.google.com">mentorshipmnnit@gmail.com</a> </span></li>
                  <!-- <li><i class="icon-phone2"></i><span>+919839664541</span></li> -->
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
    <script>var coll = document.getElementsByClassName("collapsible");
    var i;
    
    for (i = 0; i < coll.length; i++){
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
          content.style.maxHeight = null;
          content.style.visibility = "hidden";
          content.style.margin = "0 2%";
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
          content.style.visibility = "visible";
          content.style.margin = "12px 2%";
        }
      });
    }</script>
  </body>
</html>