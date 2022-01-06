<?php 
include 'db_con.php';
$sql="SELECT * FROM announcements ";
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
      <section class="main-section">
    <div id="faqs" class="container">
      <h2 class="line-heading">Announcements</h2>
      <h3 class="large-heading"></h3>
      <div id="faqSection" class="fullwidth-container">
        <div>
        <?php for($i=0;$i<$ronum;$i++) {?>
            <button class="collapsible"> <?php echo $data[$i]["Announce"]; ?></button>
          <div class="faq-content">
            <p><?php echo $data[$i]["Description"]; ?></p>
          </div>
            <?php } ?> 
        </div>
        <div>
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