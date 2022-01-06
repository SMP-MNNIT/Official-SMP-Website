<?php 
include 'db_con.php';
$sql="SELECT * FROM gallery ";
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
    <link rel="stylesheet" href="gallery.css">
    <link rel="stylesheet" href="../enlight/css/logo.css">


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

      
      <body>
      <div class="gallery-grid">
      <?php for($i=0;$i<$ronum;$i++) {?>
        <figure class="gallery-frame">
      <img class="gallery-img" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($data[$i]["image"]); ?>" alt="Free Bootstrap Template by uicookies.com" ></figure>
    </figure>
        <?php } ?>
  </div><!-- end:gallery-grid -->
</body><br></br>
 


      <!-- faqs -->
      
      <?php include 'footer.php' ?>

    </div>
    <!-- END wrapper -->
    

    <script src="../enlight/js/scripts.min.js"></script>
    <script src="../enlight/js/main.min.js"></script>
    <script src="../enlight/js/custom.js"></script>
  </body>
</html>