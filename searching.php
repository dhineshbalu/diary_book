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
     <title>search</title>
     <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" href="love.png">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Risque" rel="stylesheet">
  <link rel="stylesheet" href="animate.css">
  </head>
  <style>
  body
  {
    font-family: 'Risque', cursive;
      background-image: url("12.jpg");
  }
   #date{

     padding:10px;
    background-color:#575a60;
    border-color: white;
    border-width: 3px;
    width: 400px;
    color:white;
    text-align: center;
    border-radius: 25%;

   }
   .p1
   {
     color:white;
     margin-top: 100px;
   }
   .p2
   {
     margin-top: 120px;
   }
   .zoomInDown
   {
     animation-duration: 2s;
   }
   .rollIn
   {
     animation-duration: 5s;
   }
  </style>
  <body>

 <h1 class="text-center p1 animated  zoomInDown">enter the date to search ur moments</h1>

    <div class="container text-center p2">
          <form action="search.php" method="post">
              <input type="date" name="date" id="date"><br><br><br><br>
            <input type="submit" value="click" class="btn btn-outline-warning btn-lg animated infinite rollIn">
          </form>
        </div>

  </body>
</html>
