<?php
session_start();
 ?>
<!doctype html>
<html>
  <head>
     <title>searched moments</title>
     <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" href="love.png">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fredoka+One|Kaushan+Script|VT323" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Fredoka+One|Kaushan+Script|VT323" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Allura|Cabin+Sketch|Caveat+Brush|Fredoka+One|Kaushan+Script|Monoton|Sigmar+One|VT323" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Allura|Cabin+Sketch|Caveat+Brush|Fredoka+One|Kaushan+Script|Monoton|VT323" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Fredoka+One|Kaushan+Script|Monoton|VT323" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Racing+Sans+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Capriola|Lobster|Racing+Sans+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Capriola|Racing+Sans+One" rel="stylesheet">
<link rel="stylesheet" href="animate.css">

<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Caveat+Brush|Fredoka+One|Kaushan+Script|Monoton|VT323" rel="stylesheet">
  </head>
  <style>
  .img-thumbnail
  {
    opacity: 0.5;
  }
  .slideInUp,.slideInDown
  {
    animation-duration: 3s;

  }
  .bounce
  {
    animation-duration: 3s;
  }
   .p2
   {
     margin-top: 50px;
   }
   .p1
   {
     margin-top: 25px;
     font-family: 'Racing Sans One', cursive;
   font-family: 'Capriola', sans-serif;
   font-family: 'Lobster', cursive;
   letter-spacing: 2px;
   word-spacing: 8px;
   }
   body
   {
     background-image: url("16.jpg");
     background-attachment: fixed;
     color:white;
   }
   .p3
   {
     margin-top: 45px;
     font-family: 'Racing Sans One', cursive;
     font-size: 35px;
   }
   .p4
   {
     font-size: 35px;
     word-spacing: 5px;
     margin-top: 20px;
     font-family: 'Kaushan Script', cursive;
     font-family: 'VT323', monospace;
     font-family: 'Fredoka One', cursive;
     font-family: 'Cabin Sketch', cursive;
     font-family: 'Monoton', cursive;
     font-family: 'Caveat Brush', cursive;
     font-family: 'Allura', cursive;
line-height: 40px;
letter-spacing: 3px;
word-spacing: 5px;
   }
   .p5
   {
     margin-top: 45px;
     font-family: 'Racing Sans One', cursive;
   font-family: 'Capriola', sans-serif;
   }
   .p6
   {
     font-size: 25px;
     word-spacing: 5px;
     margin-top: 20px;
     line-height: 40px;
     letter-spacing: 3px;
     word-spacing: 5px;
     font-family: 'Kaushan Script', cursive;
font-family: 'VT323', monospace;
font-family: 'Fredoka One', cursive;
font-family: 'Cabin Sketch', cursive;
font-family: 'Monoton', cursive;
font-family: 'Caveat Brush', cursive;
   }
   .p7
   {
  margin-top: 100px;
  font-family: 'Kaushan Script', cursive;
font-family: 'VT323', monospace;
font-family: 'Fredoka One', cursive;
font-family: 'Cabin Sketch', cursive;
font-family: 'Monoton', cursive;
font-family: 'Caveat Brush', cursive;
font-family: 'Allura', cursive;
font-family: 'Sigmar One', cursive;
   }
   .p8
   {
     margin-top: 45px;
   }
  </style>
  <body>
    <?php

    include("connection.php");


    $sql = "select * from dairydata where username='".$_SESSION["username"]."' and starred='yes'";

  $result = $conn->query($sql);
//  $row = $result->fetch_assoc();

     ?>
        <h1 class="text-center p1 animated infinite bounce">Starred moments </h1>
     <?php
     while(  $row = $result->fetch_assoc())
     {



       if($result->num_rows>0)
       {
      ?>

     <div class="container text-center p2">
     <img src="images/<?php echo $row["imagename"]; ?>" class="img-thumbnail" width="300" height="150" >
    <h2 class="p3 animated infinite slideInUp">Title</h2>
  <h3 class="p4">   <?php
        echo $row["title"];
      ?>
    </h3>

    <h2 class="p5 animated infinite slideInDown">Summary</h2>
  <h3 class="p6">  <?php
         echo $row["comment"];
       echo "<hr><br>";

       ?>
     </h3>

     </div>

     <?php
   }

}
 if($result->num_rows==0)
 {
   ?>
   <div class="container text-center p7">
    <h1> no starred moments on this date  </h1>
  <img src="3.png" width="300" class="p8"height="250">
   <?php
 }

     ?>
     <script>
     $(document).ready(function()
     {
       $(".img-thumbnail").mouseenter(function()
     {
       $(this).animate({"opacity":"1"},1000);
     });
     $(".img-thumbnail").mouseleave(function()
   {
        $(this).animate({"opacity":"0.3"},1000);
   });
     });
     </script>
  </body>
</html>
