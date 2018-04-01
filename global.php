<?php
session_start();
 ?>
<!doctype html>
<html>
  <head>
     <title>global moments</title>
     <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" href="love.png">
  <link rel="stylesheet" href="animate.css">
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
<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Caveat+Brush|Fredoka+One|Kaushan+Script|Monoton|VT323" rel="stylesheet">
  </head>
  <style>
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
     background-image: url("20.jpg");
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
   .fadeInRightBig,.fadeInLeftBig
   {
     animation-duration: 5s;
   }
   .rubberBand
   {
     animation-duration: 5s;
     animation-delay: 5s;
   }
  </style>
  <body>
    <?php

    include("connection.php");


    $sql = "select * from dairydata where global='yes'";

  $result = $conn->query($sql);
//  $row = $result->fetch_assoc();

     ?>
        <h1 class="text-center p1 animated  fadeInRightBig">Global moments of everybody </h1>
     <?php
     while(  $row = $result->fetch_assoc())
     {



       if($result->num_rows>0)
       {
      ?>

     <div class="container text-center p2 fadeInLeftBig">
       <h2 class="p3 ">username</h2>
       <h3 class="p4"><?php echo $row["username"]; ?>
       </h3>
       <br>
     <img src="images/<?php echo $row["imagename"]; ?>" class="img-thumbnail animated infinite rubberBand" width="300" height="200" >
     <h2 class="p3">Date</h2>
   <h3 class="p4">   <?php
         echo $row["date"];
       ?>
     </h3>
    <h2 class="p3">Title</h2>
  <h3 class="p4">   <?php
        echo $row["title"];
      ?>
    </h3>

    <h2 class="p5">Summary</h2>
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
    <h1> Oops,no global moments  </h1><br><br><br><br>
  <img src="3.png" width="300" class="p8"height="250">
   <?php
 }

     ?>

  </body>
</html>
