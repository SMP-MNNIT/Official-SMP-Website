<?php
$sql2="SELECT * FROM user_profile WHERE reg_no='$syid'";
$res2=mysqli_query($con,$sql2);
$row=mysqli_fetch_assoc($res2);
$firstname=$row["name"];
$name[0]=$firstname;
$sql2="SELECT * FROM user_profile WHERE reg_no='$tyid'";
$res2=mysqli_query($con,$sql2);
$row=mysqli_fetch_assoc($res2);
$firstname=$row["name"];
$name[1]=$firstname;
$sql2="SELECT * FROM user_profile WHERE reg_no='$fyid1'";
$res2=mysqli_query($con,$sql2);
$row=mysqli_fetch_assoc($res2);
$firstname=$row["name"];
$name[2]=$firstname;
$sql2="SELECT * FROM user_profile WHERE reg_no='$fyid2'";
$res2=mysqli_query($con,$sql2);
$row=mysqli_fetch_assoc($res2);
?>