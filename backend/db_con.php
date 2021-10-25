<?php
$servername="localhost";
$username="root";
$password="";
$database="college";

$con=mysqli_connect($servername,$username,$password,$database);

if(!$con){
die("nope no conn bruh");
}

// echo "conn established nyaaaa";
?>