<?php 
include 'db_con.php';
$sql="SELECT * FROM alumni";
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
    <link rel="stylesheet" href="../enlight/css/style.css">
    <link rel="stylesheet" href="../enlight/css/custom.css">
    <style>
      .itemm{
        width:300px;
        /* background-color:blue; */
      }
      li{
        padding-left:0px;
      }
      .greydivs{
        font-size:14px;
        color:grey;
      }
      @media screen and (min-width: 600px) {
      .greydivs{
       font-size:15px;
       color:grey;
     }
     .itemm{
        width:1000px;
        
      }
}

    </style>
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

      <section class="flexslider">
        <ul class="slides">
          <li style="background-image: url(../enlight/img/alumni2.jpeg);" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                   
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url(../enlight/img/alumni1.jfif)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                  
                  </div>
                </div>
              </div>
            </div>
            
          </li>
          <li style="background-image: url(../enlight/img/alumni4.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                   
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </section>
      <!-- <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Meet Our Alumnis</h2>
              <p class="lead">Meeting The Moment Together</p>
            </div>
          </div>
       

          <div class="row">
            <?php for($i=0;$i<$ronum;$i++) {?>
                <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="../enlight/img/person_5.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3><?php echo $data[$i]["Name"]; ?></h3>
                  <p><?php echo $data[$i]["Phone"]; ?></p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
                <?php } ?> 

        </div>
      </section> -->
      <section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial" style="background-image: url(../enlight/img/slider_4.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Alumni Events:</h2>
              
            </div>
          </div>
          <!-- END row -->
          <div class="row">
            <div class="col-md-12 probootstrap-animate">
              <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
              <?php for($i=0;$i<$ronum;$i++) {?>
                <div class="item" >

                  <div class="probootstrap-testimony-wrap text-center itemm" >
                   
                    <blockquote class="quote">&ldquo;<?php echo $data[$i]["event"]?>
&rdquo;<br><br>
Speakers:
<br>
<ul style="text-align: left">
  <li> <?php echo $data[$i]["speaker1"]?> <br>
<div class="greydivs"> <?php echo $data[$i]["description1"]?>
</div>
</li>
<li><?php echo $data[$i]["speaker2"]?>
 <br>
<div class="greydivs" > <?php echo $data[$i]["description2"]?>
</div>
</li>
<li> <?php echo $data[$i]["speaker3"]?>
 <br>
<div class="greydivs" ><?php echo $data[$i]["description3"]?>
</div>
</li>
<li> <?php echo $data[$i]["speaker4"]?>
 <br>
<div class="greydivs" ><?php echo $data[$i]["description4"]?>
</div>
</li>
</ul>
<cite class="author"> 
                  </div>

                </div>
                <?php } ?>
                
              </div>
            </div>
          </div>
          <!-- END row -->
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