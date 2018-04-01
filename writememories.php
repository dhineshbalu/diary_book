
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
     <title>write memories with ur friend</title>
     <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" href="love.png">
 <link rel="stylesheet" href="main.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Marck+Script" rel="stylesheet">
  <link rel="stylesheet" href="animate.css">
</head>
  <style>
  body
  {
    background-image: url("5.jpg");
    font-family: 'Gloria Hallelujah', cursive;
font-family: 'Marck Script', cursive;
  }
  .p1
  {
margin-top: 55px;
letter-spacing:2px;
  }
  .t1
  {
    text-shadow: 2px 2px white;
    letter-spacing: 3px;
    color:#e83e5d;
  }
  .p2
  {
    font-style: italic;
    padding: 25px;
    color:#ff812d;
    letter-spacing: 3px;
    word-spacing: 3px;
   font-size: 20px;
  }
  .p3
  {
    margin-top:50px;
  }
  .p4
  {
    padding-top: 100px;
  }
  .fadeInDown
  {
    animation-duration: 5s;

  }
  </style>
  <body>
         <div class="container text-center p4">
           <h1 class="t1 animated infinite fadeInDown ">Slam Book</h1>
           <h3 class="p2 animated infinite fadeInDown">enter ur friend's username</h3>
           <form action="write.php" method="post" class="form-group">
              <div class="input-group p3 ">
                <span class="input-group-addon "><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="user" class="form-control" placeholder="username">
              </div>
                <input type="submit" value="click !" class="btn btn-success btn-lg p1 animated infinite pulse">
           </form>
         </div>
  </body>
</html>
