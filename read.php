<?php
session_start();
 ?>
<!doctype html>
<html>
  <head>
     <title>slam book</title>
     <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" href="love.png">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
   <link rel="stylesheet" href="animate.css">
  </head>
  <style>
  body
  {
    font-family: 'Gloria Hallelujah', cursive;
  }
  .p1
  {
margin-top: 25px;
letter-spacing:2px;
  }
  .t1
  {
    text-shadow: 2px 2px white;
    letter-spacing: 3px;
  }
  .c1
  {
    color: white;
  }
  .p2
  {
    font-style: italic;
    padding: 25px;
        color: white;
    letter-spacing: 3px;
    word-spacing: 3px;
  }
  .p3
  {
    margin-top:30px;
  }
  .p4
  {
    padding-top: 50px;
  }
  ol
  {
    color:white;
    font-size: 25px;
    margin-top: 45px;
  }
  body
  {
    background-image: url("2.jpg");
  }
  .rubberBand
  {
    animation-duration: 5s;
  }
  .slideInLeft,.slideInRight
  {
    animation-duration: 5s;
  }
  </style>
  <body>
      <div class="container text-center p4">
        <h1 class="text-primary t1 animated infinite rubberBand">Slam Book</h1>
        <h3 class="p2 animated infinite rubberBand">enter ur friends username to view what he/she written on you</h3>

        <form action="fill.php" method="post" class="form-group animated slideInLeft">
           <div class="input-group p3">
             <span class="input-group-addon "><i class="glyphicon glyphicon-user"></i></span>
             <input type="text" name="user" class="form-control" placeholder="username">
           </div>
             <input type="submit" value="click !" class="btn btn-success btn-lg p1 animated infinite pulse">
        </form>
<div class="animated slideInRight">
        <h3 class="text-center c1 ">friends those who written on you !</h3>
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

 }

 $us = $_SESSION["username"];

 $sql = "select * from slamdata where clientname='$us'";
$result =  $conn->query($sql);
echo "<ol type='1'>";
while($row = $result->fetch_assoc())
{
  echo "<li>".$row["username"]."</li><br>";
}
echo "</ol>";

 ?>
</div>
      </div>

  </body>
</html>
