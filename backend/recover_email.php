<?php 
$pascor=true;
$yes=0;
if($_SERVER["REQUEST_METHOD"]=="POST"){
include 'db_con.php';
$username=$_POST["username"];
$sql="SELECT * FROM user_login WHERE user_id='$username'";
$res=mysqli_query($con,$sql);
$i=mysqli_num_rows($res);

if($i)
{
    
    $user=mysqli_fetch_assoc($res);
    $token=$user["token"];
    $email=$user["email"];
    $name=$user["first_name"];
    $subject="Password reset";

    $body="Hi, $name . Click here to activate your account 
    http://localhost/Official_Smp/Official-SMP-Website/backend/resetPassword.php?token=$token";
    $sender_mail="From: krishnkantagrawal15@gmail.com";
    if(mail($email,$subject,$body,$sender_mail))
    {
        $yes=1;
        $pascor=false;
        
        // $_SESSION['msg']="Check Your mail account to reset your password $email";
        // header ('location:signin.php');
    }
    else{
        $yes=0;
        $pascor=false;
        
    }
}
else
{ $yes=2;
    $pascor=false;
       
}


}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Shradhey Pathak, MNNIT Allahabad">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Signin - SMP</title>
    <link href="../enlight/img/smp3.png" rel="shortcut icon" type="image/png">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="../enlight/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  
  <body class="text-center">
  
  <?php
  if(!$pascor){
      if($yes==1)
      {
        echo '<div style="margin-left:41%;"><div class="alert alert-warning alert-dismissible fade show" role="alert" style="
        position: fixed; top:0;">
         Mail Sent succesfully!!!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div></div>';
      }
      else if($yes==2)
      {
        echo '<div style="margin-left:41%;"><div class="alert alert-warning alert-dismissible fade show" role="alert" style="
        position: fixed; top:0;">
        <strong>Error!</strong> Wrong registration number..
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div></div>';
      }
      else{
        echo '<div style="margin-left:41%;"><div class="alert alert-warning alert-dismissible fade show" role="alert" style="
        position: fixed; top:0;">
        <strong>Error!</strong> Some error occured. Mail not sent!!!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div></div>';
      }
    
  }
  ?>
    <form class="form-signin" action="recover_email.php" method="POST">
      <!-- Image -->
        <img class="mb-4" src="../enlight/img/download.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Enter Your registration number..</h1><br>
        <!-- Email -->
        <label for="inputEmail" class="sr-only">Registration Number</label>
        <input type="tel" id="inputEmail" class="form-control" placeholder="Registration Number" name ="username" value="<?php if(isset($_COOKIE["username"])) {echo $_COOKIE["username"];} ?>" required autofocus ><br>
        <!-- Password -->
        <!-- Button -->
        <button  id="myButton"class="btn btn-lg btn-primary btn-block" type="submit" >Send link on registered email</button>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>



