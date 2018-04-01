<?php
session_start();
 ?>

<!doctype html>
<html>
  <head>
     <title>profile</title>
     <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" href="love.png">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
 <link rel="stylesheet" href="animate.css">
 <link href="https://fonts.googleapis.com/css?family=Concert+One|Permanent+Marker" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Concert+One|Great+Vibes|Permanent+Marker" rel="stylesheet">

  </head>
  <style>
 body
 {
   background-image: url("24.jpg");
   background-attachment: fixed;
   color:white;
 }
  .p1
  {
    margin-top: 45px;
  }
  .p2
  {
font-family: 'Concert One', cursive;
letter-spacing: 3px;
  }
  .p3
  {
    letter-spacing: 3px;
    word-spacing:5px;
  margin-top: 15px;
  padding-top: 10px;
  font-family: 'Concert One', cursive;
font-family: 'Permanent Marker', cursive;
  }
  .p4
  {
    letter-spacing: 3px;
    word-spacing:5px;
    font-family: 'Concert One', cursive;
  font-family: 'Permanent Marker', cursive;
  }
  h3
  {
    letter-spacing: 3px;
    font-size: 27px;
    font-family: 'Concert One', cursive;
font-family: 'Permanent Marker', cursive;
font-family: 'Great Vibes', cursive;
  }
  .slideInUp
  {
    animation-duration: 5s;
  }

  </style>
  <body class="animated slideInUp">

    <?php
          include("connection.php");

        //  print_r($_SESSION);

          $sql = "select * from verify where username='".$_SESSION["username"]."'";
          $result=$conn->query($sql);
          $row = $result->fetch_assoc();
     ?>

        <h1 class="p2 text-center ">Profile</h1>
       <div class="container-fluid text-center p1">

                 <h2 class="p3">username  </h2>
<h3>
<?php
          echo $row["username"];
 ?>
</h3><br>

         <h2 class="p4">email id  </h2>
<h3>
<?php
echo $row["email"];
?>
</h3><br>

           <h2 class="p4">phone number  </h2>
<h3>
<?php
echo $row["number"];
?>
</h3><br>



       </div>
  </body>
</html>
