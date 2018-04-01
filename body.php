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
     <title>main page</title>
     <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" href="love.png">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Lobster" rel="stylesheet">
 <link rel="stylesheet" href="animate.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <style>
  #particles-js
{
  margin: 0;
  padding: 0;
  background-color:#484b4f;
  height: 500px;

}
.p0
{
  font-size: 25px;
}
.g1
{
  font-size: 25px;
  font-family: 'Josefin Sans', sans-serif;
font-family: 'Lobster', cursive;
letter-spacing: 2px;
word-spacing: 4px;

}
.flip
{
  animation-duration: 5s;
}
.bounce
{
  animation-duration: 5s;
}
  </style>
  <body id="particles-js" >

      <nav class="nav navbar-inverse p0 ">
         <div class="container-fluid">
           <div class="navbar-header">

              <a class="navbar-brand g1 animated infinite flip" href="body.html">Dairy with memories</a>
           </div>

           <ul class="nav navbar-nav navbar-right animated infinite bounce">

             <li class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>
         <span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="profile.php"><b>Profile</b></a></li>
           <li><a href="sfriend.php"><b>Search friends</b></a></li>

         </ul>
       </li>
             <li><a title="add moments" href="adddate.php"><span class="glyphicon glyphicon-calendar"></span></a></li>
                    <li><a title="search moments" href="searching.php"><span class="glyphicon glyphicon-search"></span></a></li>

                <li><a title="starred moments" href="star.php"><span class="glyphicon glyphicon-star"></span></a></li>

                   <li><a title="global moments" href="global.php"><span class="glyphicon glyphicon-globe"></span></a></li>
                      <li><a title="slam" href="slam.php"><span class="glyphicon glyphicon-book"></span></a></li>
                          <li><a title="chat" href="chatit.php"><span class="glyphicon glyphicon-pencil"></span></a></li>
                    <!--  <li><a title="groupchat" href="chatting.php"><span class="glyphicon glyphicon-pencil"></span></a></li>-->
                                  <li><a title="send sms" href="index.php"><span class="glyphicon glyphicon-comment"></span></a></li>
       <li><a title="logout" href="logout.php"><span class="glyphicon glyphicon-log-out"></span></a></li>
           </ul>
         </div>
      </nav>


      <script src="particles.js"></script>
        <script src="app.js"></script>

  </body>
</html>
