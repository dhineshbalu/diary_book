
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
     <title>chat with ur friends</title>
     <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" href="love.png">
 <link rel="stylesheet" href="animate.css">

 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

 <!-- Popper JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  </head>
  <style>
  body
  {
font-family: 'Josefin Sans', sans-serif;
background-image: url("23.jpg");
background-repeat: no-repeat;
color:white;
  }
  .c1
  {
 margin-top: 220px;
  }
  .c3
  {
    margin-left: 220px;
  }
  .h1{
    margin-top: 20px;
  }
  .zoomIn
  {
    animation-duration: 5s;
  }
  .hinge
  {
    animation-duration: 10s;
    animation-delay: 4s;
  }
  </style>
  <body>
       <h2 class="text-center h1 animated infinite zoomIn">Chat with ur friends</h2>
    <div class="container text-center c1">
        <a href="enterit.php"  class="btn btn-outline-success btn-lg c2 animated infinite hinge">Private chat</a>
          <a href="chatting.php"  class="btn btn-outline-warning btn-lg c3 animated infinite hinge">Group chat</a>
    </div>
  </body>
</html>
