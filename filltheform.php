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
     <title>fill the form</title>
     <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" href="love.png">
 <link rel="stylesheet" href="main.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet"    href="https://fonts.googleapis.com/css?family=Tangerine">
 <link href="https://fonts.googleapis.com/css?family=Risque" rel="stylesheet">
 <link rel="stylesheet" href="animate.css">
<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Dancing+Script|Risque" rel="stylesheet">
</head>
<style>
body
{

  background-image:url("15.jpg");
}
h2 {
  padding-top: 10px;
       font-family: 'Tangerine', serif;
       font-size: 55px;
        text-shadow: 2px 2px 1px white;
        color:tomato;
     }

     h4
     {
       padding-top:20px;
       padding-bottom:10px;
       font-family: 'Tangerine', serif;
       font-size: 55px;
        text-shadow: 2px 2px 1px white;
        color:green
     }

     h3{
       font-family: 'Risque', cursive;
      color:white;
     }
     input
     {
       font-family: 'Risque', cursive;
   font-family: 'Dancing Script', cursive;
   font-family: 'Berkshire Swash', cursive;
     }
     .rubberBand
     {
       animation-duration: 5s;
     }
     .flip,.fadeInDown,.bounce
     {
       animation-duration: 5s;
     }

</style>
<body>
     <div class="container-fluid text-center ">
        <h2 class="animated infinite fadeInDown">Fill the memories for ur friend</h2>
        <h4 class="animated infinite fadeInDown">Open up and feel free to fill this up</h4>
        <div class="container-fluid">
            <form method="post" action="fillform.php" class="form-group">
          <div class="row">

          <div class="col-lg-6">
            <h3 class="animated infinite bounce" >About You</h3>
            <div class="input-group">
              <span class="input-group-addon "><i class="glyphicon glyphicon-user "></i></span>
              <input type="text" name="client" class="form-control" placeholder="ur friends name" required>
            </div><br>

            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user "></i></span>
              <input type="text" name="nick" class="form-control" placeholder="ur nick name" required>
            </div><br>

            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              <input type="date" name="date"  class="form-control" required>
            </div><br>

            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-heart"></i></span>
              <input type="text"  name="meet" class="form-control" placeholder="if you want to meet who it would be ?" required>
            </div><br>

            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-heart"></i></span>
              <input type="text" name="wish" class="form-control" placeholder="if you had three wishes what would they be ?" required>
            </div><br>

            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-heart"></i></span>
              <input type="text" name="fav1" class="form-control" placeholder="favourite sports and teams" required>
            </div><br>

            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-heart"></i></span>
              <input type="text"  name="fav2" class="form-control" placeholder="favourite songs and musics" required>
            </div><br>

            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-heart"></i></span>
              <input type="text" name="next" class="form-control" placeholder="what you want to be in next 20 years ?" required>
            </div><br>

            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-heart"></i></span>
              <input type="text"  name="likes" class="form-control" placeholder="what are all the things like you the most ?" required>
            </div><br>

           </div>

      <div class="col-lg-6">
         <h3 class="animated infinite bounce">About me</h3>

         <div class="input-group">
           <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
           <input type="text" name="username" class="form-control" placeholder="ur name" required>
         </div><br>
         <div class="input-group">
           <span class="input-group-addon"><i class="glyphicon glyphicon-heart"></i></span>
           <input type="text" name="mind"  class="form-control" placeholder="things get into ur mind when u hear me " required>
         </div><br>


                     <div class="input-group">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-heart"></i></span>
                       <input type="text" name="weak" class="form-control" placeholder="my weakness" required>
                     </div><br>

                     <div class="input-group">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-heart"></i></span>
                       <input type="text" name="strength" class="form-control" placeholder="my strength" required>
                     </div><br>

                     <div class="input-group">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-heart"></i></span>
                       <input type="text" name="say" class="form-control" placeholder="what people say about me" required>
                     </div><br>

                     <div class="input-group">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-heart"></i></span>
                       <input type="text" name="first" class="form-control" placeholder="ur first impression me" required>
                     </div><br>

                     <div class="input-group">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-heart"></i></span>
                       <input type="text" name="current" class="form-control" placeholder="ur current impression on me" required>
                     </div><br>



                     <div class="input-group">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                       <input type="text" name="worst"  class="form-control" placeholder="worst habit of me" required>
                     </div><br>

                     <div class="input-group">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                       <input type="text"name="advise"  class="form-control" placeholder="advise to me" required>
                     </div><br>


      </div>
</div>
            <input type="submit" class="btn btn-warning btn-lg animated infinite flip" value="click to submit!">
        </form>
     </div>
   </div>
</body>
</html>
