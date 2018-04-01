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
   <link rel="stylesheet" href="animate.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Bungee|Italianno" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bungee|Creepster|Iceland|Italianno|Racing+Sans+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bungee|Creepster|Iceland|Italianno|Just+Me+Again+Down+Here|Racing+Sans+One" rel="stylesheet">
   </head>
   <style>
   body
   {
       background-image: url("8.jpg");
       background-attachment: fixed;
   }
   h1
   {
     font-family: 'Bungee', cursive;
font-family: 'Italianno', cursive;
color:white;
   }

   h4
   {
     color:#595853;
font-family: 'Bungee', cursive;
font-family: 'Italianno', cursive;
font-family: 'Racing Sans One', cursive;
font-family: 'Iceland', cursive;
font-family: 'Creepster', cursive;
   }
   span
   {
     color:#e26880;
     font-size: 30px;
     font-family: 'Bungee', cursive;
     font-family: 'Italianno', cursive;
     font-family: 'Racing Sans One', cursive;
     font-family: 'Iceland', cursive;
     font-family: 'Creepster', cursive;
     font-family: 'Just Me Again Down Here', cursive;
   }
 .slideInDown,.bounce
 {
   animation-duration: 5s;
 }
 .slideInLeft,.slideInRight
 {
   animation-duration: 10s;
 }
   </style>
   <body>
      <div class="container-fluid">
        <h1 class="text-center animated slideInDown">view what ur friend's written about you</h1>
        <?php
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
     $servername="localhost";
     $username="root";
     $password="";
     $dbname="dairy";


     $conn = new mysqli($servername,$username,$password,$dbname);
      if($conn->connect_error)
      {
        die("");
      }
      else {
        echo "";
      }
      $cs = $_SESSION["username"];
      $us = $_POST["user"];

      $sql ="select * from slamdata where username='$us' and clientname='$cs'";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();


      $nick = $row["nick"];
      $date = $row["date"];
      $meet = $row["meet"];
      $wish = $row["wish"];
      $fav1 = $row["fav1"];
      $fav2 = $row["fav2"];
      $next  =$row["next"];
      $likes = $row["likes"];
      $mind = $row["mind"];
      $weak = $row["weak"];
      $strength = $row["strength"];
      $say = $row["say"];
      $first = $row["first"];
      $current = $row["current"];
      $worst = $row["worst"];
      $advise = $row["advise"];

    }
    ?>
    <div class="container text-center animated slideInLeft">
      <h1 class="animated infinite bounce">About himself</h1>
       <div class="well well-sm"><h4>Ur friend name : <span><?php  echo $us; ?></span></h4>  </div>
        <div class="well well-sm"><h4>Nickname : <span><?php  echo $nick; ?></span></h4></div>
        <div class="well well-sm"> <h4>date of birth : <span><?php  echo $date; ?></span></h4>  </div>
        <div class="well well-sm"><h4> If he/she want to meet anyone,it would be : <span><?php  echo $meet; ?></span></h4>  </div>
       <div class="well well-sm"><h4>If he/she had 3 wishes, what would they be : <span><?php  echo $wish; ?></span></h4>  </div>
      <div class="well well-sm"><h4>Favorite sports and teams : <span><?php  echo $fav1; ?></span></h4>  </div>
      <div class="well well-sm"><h4>Favorite songs and music : <span><?php  echo $fav2; ?></span></h4>  </div>
         <div class="well well-sm"><h4>Where will he/she want to be in 20 years : <span><?php  echo $next; ?></span></h4>  </div>
       <div class="well well-sm"><h4>What things iritate him/her the most : <span><?php  echo $likes; ?></span></h4>  </div>
  </div>
  <div class="container text-center animated slideInRight">
  <h1 class="animated infinite bounce" >  About myself</h1>
       <div class="well well-sm"><h4>Things that gets into his/her mind when you hear my name : <span><?php  echo $mind; ?></span></h4>  </div>
      <div class="well well-sm"><h4>My weakness : <span><?php  echo $weak; ?></span></h4>  </div>
       <div class="well well-sm"><h4>My strength : <span><?php  echo $strength; ?></span></h4>  </div>
        <div class="well well-sm"><h4>What people say about me : <span><?php  echo $say; ?></span></h4>  </div>
         <div class="well well-sm"><h4>His/her first impression on me :  <span><?php  echo $first; ?></span></h4>  </div>
          <div class="well well-sm"><h4>His/her present impression on me : <span><?php  echo $current; ?></span></h4>  </div>
           <div class="well well-sm"><h4>Worst habit of me :  <span><?php  echo $worst; ?></span></h4>  </div>
             <div class="well well-sm"><h4>Advices to me : <span><?php  echo $advise; ?></span></h4>  </div>
  </div>
      </div>
   </body>
 </html>
