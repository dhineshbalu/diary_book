<?php
session_start();
if(!isset($_SESSION["username"]))
{
  header('Location: login.html');
}
?>
<!doctype html>
<html>
  <head>
     <title>slam book</title>
     <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" href="love.png">
 <link rel="stylesheet" href="main.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="animate.css">
  </head>
  <style>
  body{
    background-image: url("3.jpg");

  }
  .b1
  {
    text-shadow: 3px 3px white;
  }
  .p1
  {
    padding-left: 25px;
  }
.m1
{
  margin-left: 25px;
}
.swing
{
  animation-duration: 5s;
  animation-delay: 2s;
}
  </style>
  <body>
     <div class="container-fluid text-center ">
         <h1 class="text-danger b1 animated infinite swing jello">Slam Book</h1>
     <a href="writememories.php" class="btn btn-warning p1 animated infinite swing jello">write memories to ur friend</a>
        <a href="read.php" class="btn btn-success p1 m1 animated infinite swing jello">ur memories with ur friend's</a><br>
     <br>

         <img src="1.png">


     </div>
  </body>
</html>
