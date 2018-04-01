<?php
$servername="localhost";
$username="root";
$password="";
$dbname="dairy";


$conn = new mysqli($servername,$username,$password,$dbname);
 if($conn->connect_error)
 {
   die("not connected..........");
 }
 else {
   echo " ";
 }
 ?>
