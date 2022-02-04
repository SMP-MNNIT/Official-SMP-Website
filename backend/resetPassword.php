<?php 
$pascor=true;
$yes=0;
if($_SERVER["REQUEST_METHOD"]=="POST"){
include 'db_con.php';

$password=$_POST["password"];
$confirmPassword=$_POST["confirmPassword"];

// $pass=password_hash($password,PASSWORD_BCRYPT);
// $cpass=password_hash($confirmPassword,PASSWORD_BCRYPT);
if(isset($_GET['token'])){
    $token=$_GET['token'];
    $sql="SELECT * FROM user_login WHERE token='$token'";
    $res=mysqli_query($con,$sql);
    $i=mysqli_num_rows($res);
    if($i)
    {
        $user=mysqli_fetch_assoc($res);
        $user_id=$user['user_id'];
        echo $user_id;
        if($password===$confirmPassword){
            $updateQuery="update user_login set password='$password' where user_id='$user_id' ";
            $iquery= mysqli_query($con,$updateQuery);
            if($iquery){
                $pascor=false;
                $yes=1;
                header ('location:signin.php');
            }
            else{
                $pascor=false;
                $yes=0;
                $_SESSION['newMsg']="Password dosent reset";
                header ('location:signin.php');
            }
            
        }else{
            $pascor=false;
                $yes=2;
            $_SESSION['newMsg']="Password Not matching";
        }
    }
    else
    {
        $pascor=false;
                $yes=3;
        echo "Something Invalid";
    }
}
    
else{
    echo "No token found";
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
       
       <strong>Error!</strong> Password Not matching!!!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div></div>';
    }
      else if($yes==3)
      {
        echo '<div style="margin-left:41%;"><div class="alert alert-warning alert-dismissible fade show" role="alert" style="
        position: fixed; top:0;">
        <strong>Error!</strong> Something Invalid
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div></div>';
      }
      else{
        echo '<div style="margin-left:41%;"><div class="alert alert-warning alert-dismissible fade show" role="alert" style="
        position: fixed; top:0;">
        <strong>Error!</strong> Some error occured. Password dosent reset!!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div></div>';
      }
    
  }
  ?>
  <p><?php 
  if(isset($_SESSION['newMsg']))
  {
    echo $_SESSION['newMsg'];
  }else{
    echo $_SESSION['newMsg']="";
  }
   ?></p>
    <form class="form-signin"  method="POST">
      <!-- Image -->
        <img class="mb-4" src="../enlight/img/download.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Update your password here..</h1><br>
        <!-- Email -->
        <label for="inputPassword" class="sr-only">New Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name ="password" required>
        <label for="inputPassword" class="sr-only"> Confirm New Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Confirm-Password" name ="confirmPassword"  required>
        <!-- Password -->
        <!-- Button -->
        <button  id="myButton"class="btn btn-lg btn-primary btn-block" type="submit" >Update Password</button>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>



