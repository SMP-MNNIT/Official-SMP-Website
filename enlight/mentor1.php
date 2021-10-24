<?php 
include "db_con.php";
session_start();
$student_id=$_SESSION["user_id"];
$sql="SELECT * FROM student_mentor WHERE student_id='$student_id'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
$syid=$row["second_year_mentor"];
$tyid=$row["third_year_mentor"];
$fyid1=$row["fourth-year1"];
$fyid2=$row["fourth_year2"];
$fyid3=$row["fourth_year3"];
$fyid4=$row["fourth_year4"];
$_SESSION["syid"]=$syid;
$_SESSION["tyid"]=$tyid;
$_SESSION["fyid1"]=$fyid1;
$_SESSION["fyid2"]=$fyid2;
$_SESSION["fyid3"]=$fyid3;
$_SESSION["fyid4"]=$fyid4;
include "mentor1Inc.php";
?> 
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="sHRADHEY pATHAK, MNNIT aLLAHABAD">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Mentors - SMP</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/grid/">

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.css" rel="stylesheet">

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

        .subbtn{
            background: none;
            border: none;
            padding: 0;
            color:white;
            /*optional*/
            /* font-family: arial, sans-serif; */
            cursor: pointer;
        }
        .subbtn:hover{
            color:#069;
             text-decoration: underline;

        }
    </style>

    <!-- Custom styles for this template -->
    <link href="mentor1.css" rel="stylesheet">
</head>

<body class="py-4">
    <div class="container">
    <?php
                        if(isset($_GET['btn-2']))
                        {
                            $_SESSION["reg_no"]=$_SESSION["syid"];
                            // echo $_SESSION["reg_no"];
                            header("location: profile.php");
                        }
                       else if(isset($_GET['btn-3']))
                       {
                       $_SESSION["reg_no"]=$_SESSION["tyid"];
                    //    echo $_SESSION["reg_no"];
                       header("location: profile.php");
                       }
                       else if(isset($_GET['btn-41']))
                       {
                       $_SESSION["reg_no"]=$_SESSION["fyid1"];
                    //    echo $_SESSION["reg_no"];
                       header("location: profile.php");
                       }
                       else if(isset($_GET['btn-42']))
                       {
                       $_SESSION["reg_no"]=$_SESSION["fyid2"];
                    //    echo $_SESSION["reg_no"];
                       header("location: profile.php");
                       }
                       else if(isset($_GET['btn-43']))
                       {
                       $_SESSION["reg_no"]=$_SESSION["fyid3"];
                    //    echo $_SESSION["reg_no"];
                       header("location: profile.php");
                       }
                       else if(isset($_GET['btn-44']))
                       {
                       $_SESSION["reg_no"]=$_SESSION["fyid4"];
                    //    echo $_SESSION["reg_no"];
                       header("location: profile.php");
                       }
                       
                   ?>
        <img src="pics/download.png" alt="Logo" style="float: right;">
        <h1>Mentors</h1>
        <p class="lead">Find Your Mentors Family Alloted Here</p>
        <p>Please maintain the decorum, contact Second Years and don't just move up to Final Year Mentors.</p>
        <p>Expecting Your Support and Friendly Behavior.
            <br><br>
            <hr>

            <h2 class="mt-4">Second Year Mentors</h2>
            <p>Fetch the contact info of your Second Year Mentors to whom you should contact First.</p>

            <!-- <div class="row mb-3">
    <div class="col-4 themed-grid-col"><a href="profile.html">Second Year</a></div>
    <div class="col-4 themed-grid-col"><a href="profile.html">Second Year</a></div>
    <div class="col-4 themed-grid-col"><a href="profile.html">Second Year</a></div>
  </div> -->

            <!-- <div class="row mb-3">
    <div class="col-sm-4 themed-grid-col"><a href="profile.html">Second Year</a></div>
    <div class="col-sm-4 themed-grid-col"><a href="profile.html">Second Year</a></div>
    <div class="col-sm-4 themed-grid-col"><a href="profile.html">Second Year</a></div>
  </div>

  <div class="row mb-3">
    <div class="col-md-4 themed-grid-col"><a href="profile.html">Second Year</a></div>
    <div class="col-md-4 themed-grid-col"><a href="profile.html">Second Year</a></div>
    <div class="col-md-4 themed-grid-col"><a href="profile.html">Second Year</a></div>
  </div> -->
            
            <div style="background-color:burlywood" class="container themed-container">
            
            <form  method="get" action="mentor1.php">
            <input id="btn-2" name="btn-2"type="submit" value="<?php echo $name[0] ?>" class="subbtn">
            </form> 
                
                
            </div>
            <br>
            <hr>
    </div><br>
    <hr>
                    
    <div class="container" id="containers">
        <h2 class="mt-4">Third Year Mentors</h2>
        <p>For a more Serious Context, You can contact them, but first approach </p>
        <div style="background-color:burlywood" class="container themed-container">
        <form method="get" action="mentor1.php">
            <input  id="btn-3" name="btn-3" type="submit" value="<?php echo $name[1] ?>" class="subbtn" >
            </form></div><br>
            
        <hr>
    </div>
    <div class="container" id="containers">
        <h2 class="mt-4">Final Year Mentors</h2>
        <p>These are your Mentor Team Head,feel free to contact them only in case of acute emergency</p>
    </div>

    <div style="background-color: burlywood" class="container themed-container"> <form  method="get" action="mentor1.php">
            <input id="btn-41" name="btn-41"type="submit" value="<?php echo $name[2] ?>" class="subbtn">
            </form> </div>
    <div style="background-color: burlywood" class="container themed-container"> <form  method="get" action="mentor1.php">
            <input id="btn-42" name="btn-42"type="submit" value="<?php echo $name[3] ?>" class="subbtn">
            </form> </div>
    <div style="background-color: burlywood;" class="container themed-container"> <form  method="get" action="mentor1.php">
            <input id="btn-43" name="btn-43"type="submit" value="<?php echo $name[4] ?>" class="subbtn">
            </form> </div>
    <div style="background-color: burlywood;" class="container themed-container"> <form  method="get" action="mentor1.php">
            <input id="btn-44" name="btn-44"type="submit" value="<?php echo $name[5] ?>" class="subbtn">
            </form> </div>
    <br>
    
    <p>&copy; SMP - MNNIT </p>
    
</body>

</html>