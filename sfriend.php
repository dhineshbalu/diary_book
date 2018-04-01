<?php
session_start();
include("connection.php");
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
 <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Lobster" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Dancing+Script|Lobster" rel="stylesheet">
 <link rel="stylesheet" href="animate.css">
  </head>
  <style>
   .c1
{
    margin-top: 25px;

}
.c2
{
  margin-top: 20px;
 margin-left: 350px;
  width: 600px;

}
b
{
font-family: 'Lobster', cursive;
letter-spacing: 2px;
word-spacing: 3px;

}
i
{
  font-family: 'Lobster', cursive;
font-family: 'Dancing Script', cursive;
font-size: 25px;
letter-spacing: 2px;
word-spacing: 3px;

}
body
{
  background-image: url("25.jpg");
  background-attachment: fixed;
  color: white;
}

h1
{
  font-family: 'Lobster', cursive;
font-family: 'Dancing Script', cursive;
font-family: 'Berkshire Swash', cursive;
letter-spacing: 2px;
word-spacing: 5px;

}
p
{
  font-size:25px;
}
.bounce
{
  animation-duration: 3s;

}
.slideInLeft
{
  animation-duration: 5s;

}

  </style>
  <body>

    <h1 class="text-center p1 animated infinite bounce">Users account details</h1>
    <div class="container  c1">
         <?php
                $sql = "select * from verify where not username='".$_SESSION["username"]."'";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc())
                {
                  ?>
               <div class="container c2 animated  slideInLeft">

          <p><b>Username   :  </b>  <span class="glyphicon glyphicon-user"></span> &nbsp; &nbsp; <?php  echo  "<i>".$row["username"]."</i>"; ?></p>
           <p><b>email id   :</b>  &nbsp;  &nbsp; <span class="glyphicon glyphicon-envelope"></span> &nbsp; &nbsp; <?php  echo  "<i>".$row["email"]."</i>"; ?></p>
           <p><b>Mobile no :</b>   &nbsp;  <span class="glyphicon glyphicon-earphone"></span> &nbsp; &nbsp; <?php  echo  "<i>".$row["number"]."</i>"; ?></p>
 <br><hr>
            </div>
          <?php
                }
          ?>
    </div>
  </body>
</html>
