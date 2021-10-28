<?php
$servername="localhost";
$username="root";
$password="";
$database="smp_website";

$con=mysqli_connect($servername,$username,$password,$database);

if(!$con){
die("nope no conn bruh");
}

?>