<?php 
$pascor=true;
if($_SERVER["REQUEST_METHOD"]=="POST"){
include 'db_con.php';
$username=$_POST["username"];
$password=$_POST["password"];
$sql="SELECT * FROM user_login WHERE user_id='$username' AND password='$password'";
$res=mysqli_query($con,$sql);
$i=mysqli_num_rows($res);

if($i==0 ){
    $pascor=false;
}
else{
  echo "logged in";
    $user=mysqli_fetch_assoc($res);
    session_start();
    $uid=$user["user_id"];
    $pwd=$user["password"];
    $_SESSION["user_id"]=$uid;
    if(!empty($_POST["remember"])){
      setcookie("username",$uid,time()+(100*60*60*24));
      setcookie("password",$pwd,time()+(100*60*60*24));
    }
    else{
      if(isset($_COOKIE["username"]))
      setcookie("username","");
      if(isset($_COOKIE["password"]))
      setcookie("password","");
    }
    header("location: index.php");
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
    echo '<div style="margin-left:41%;"><div class="alert alert-warning alert-dismissible fade show" role="alert" style="
    position: fixed; top:0;">
    <strong>Error!</strong> Wrong id or password!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div></div>';
  }
  ?>
    <form class="form-signin" action="signin.php" method="POST">
      <!-- Image -->
        <img class="mb-4" src="../enlight/img/download.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <!-- Email -->
        <label for="inputEmail" class="sr-only">Registration Number</label>
        <input type="tel" id="inputEmail" class="form-control" placeholder="Registration Number" name ="username" value="<?php if(isset($_COOKIE["username"])) {echo $_COOKIE["username"];} ?>" required autofocus >
        <!-- Password -->
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name ="password" value="<?php if(isset($_COOKIE["password"])) {echo $_COOKIE["password"];} ?>" required>
        <!-- RememberMe -->
        <div class="checkbox mb-3">
          <label>
             <input type="checkbox" name="remember" value="remember-me" <?php if(isset($_COOKIE["username"])) { ?> checked <?php } ?>> Remember me
          </label>
        </div>
        <!-- Button -->
        <button  id="myButton"class="btn btn-lg btn-primary btn-block" type="submit" >Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; SMP-Mnnit Allahabad</p>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>



