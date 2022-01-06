<?php
  if (isset($_GET['row'])) {
    $id=$_GET['row'];
    include 'db_con.php';
    $sql="SELECT * FROM events WHERE id=$id";
    $res=mysqli_query($con,$sql);
    $ronum=mysqli_num_rows($res);
    while($row=mysqli_fetch_assoc($res)){
      $data[]=$row;
    }
    $sql2="SELECT * FROM events";
$res2=mysqli_query($con,$sql2);
$ronum2=mysqli_num_rows($res2);
while($row2=mysqli_fetch_assoc($res2)){
  $data2[]=$row2;
}
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
      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1><?php echo $data[0]["event"]?></h1>
            </div>
          </div>
        </div>
      </section>

      

      <section class="probootstrap-section probootstrap-section-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row probootstrap-gutter0">
                <div class="col-md-4" id="probootstrap-sidebar">
                  <div class="probootstrap-sidebar-inner probootstrap-overlap probootstrap-animate">
                    <h3>More Events</h3>
                    <ul class="probootstrap-side-menu">
                    <?php for($i=0;$i<$ronum2;$i++) {?>
                      <li class="active"><a href="event.php?row=<?php echo $data2[$i]["id"]?>"><?php echo $data2[$i]["event"]; ?></a></li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
                <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                  <h2>Description</h2>
                  <p><?php echo $data[0]["description"]?></p>
                </div>
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