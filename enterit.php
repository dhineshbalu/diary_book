
<?php
session_start();
if(!isset($_SESSION["username"]))
{
  header('Location: login.html');
}
?><!doctype html>
<html>
  <head>
     <title>enter the friends username </title>
     <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" href="love.png">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Cookie|Righteous" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Concert+One|Cookie|Kaushan+Script|Righteous" rel="stylesheet">
  </head>
  <style>
    .c1
    {

    margin-top: 140px;
      font-family: 'Righteous', cursive;
font-family: 'Cookie', cursive;
font-size: 40px;
word-spacing: 7px;
letter-spacing: 2px;
    }
    .c3
    {

      font-family: 'Righteous', cursive;
      font-family: 'Cookie', cursive;
      font-family: 'Concert One', cursive;
      font-family: 'Kaushan Script', cursive;
      letter-spacing: 2px;
      word-spacing: 4px;
    }
    .c2
    {
     width: 500px;
    }
    label
    {
      font-size: 30px;
    }
    .p1
    {
font-family: 'Righteous', cursive;
    }
    body{
 color:white;
  background-image: url("22.jpg");
    }
  </style>
  <body>
    <h2 class="text-center p1">Chat with ur friends</h2>
    <div class="container text-center c2">
         <form action="enter.php" method="get"  class="form-group text-center c1">
         <div class="form-group">
            <label><h3>enter ur friends username</h3></label>
            <input type="text" class="form-control c3" name="user" placeholder="username.."required>
         </div>
         <input type="submit" class="btn btn-success btn-lg" value="click it !">
         </form>
    </div>
  </body>
</html>
