<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "agriculture";
$conn = mysqli_connect("$servername","$username","$password","$database");

if(!$conn){
  die("sorry we failed to connect...".mysqli_connect_error());
}
?>