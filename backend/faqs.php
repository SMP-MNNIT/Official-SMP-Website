<?php 
include 'db_con.php';
$sql="SELECT * FROM faqs ";
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
    <title>SMP - MNNIT</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link href="../enlight/img/smp3.png" rel="shortcut icon" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../enlight/css/styles-merged.css">
    <link rel="stylesheet" href="../enlight/css/style.min.css">
    <link rel="stylesheet" href="../enlight/css/custom.css">
    <link rel="stylesheet" href="../enlight/css/faqs.css">
    <style>
     .he1{
       color: white;
       font-size: 20px;
     }
     #hee3{
      color: white;
       font-size: 23px;
     }
     @media screen and (min-width: 600px) {
      .he1{
       color: white;
       font-size: 30px;
     }
     #hee3{
      color: white;
       font-size: 35px;
     }
}
    </style>

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
      <!-- <section class="main-section">
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
  </section> -->
  <section class="main-section">
  <div id="faqs" class="container">
    <h2 class="line-heading he1">Frequently Asked Questions</h2>
    <h3 class="large-heading" id="hee3">Some of the most common questions asked about Website Design & Development.</h3>
    <div id="faqSection" class="fullwidth-container">
      <div>
      <?php for($i=0;$i<$ronum/2;$i++) {?>
            <button class="collapsible"> <?php echo $data[$i]["ques"]; ?></button>
          <div class="faq-content">
            <p><?php echo $data[$i]["answer"]; ?></p>
          </div>
            <?php } ?> 
        
       
      </div>
      <div>
      <?php for($i=$ronum/2;$i<$ronum;$i++) {?>
            <button class="collapsible"> <?php echo $data[$i]["ques"]; ?></button>
          <div class="faq-content">
            <p><?php echo $data[$i]["answer"]; ?></p>
          </div>
            <?php } ?> 
       
        
       
      </div>
    </div>
  </div>
</section>
 


      <!-- faqs -->
      
      <?php include 'footer.php' ?>
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