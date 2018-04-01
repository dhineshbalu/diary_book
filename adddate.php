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
     <title>add moments</title>
     <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" href="love.png">
 <link rel="stylesheet" href="main.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Monofett" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Joti+One|Monofett" rel="stylesheet">
 <script src="https://code.responsivevoice.org/responsivevoice.js"></script>
 <link rel="stylesheet" href="animate.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <style>
  body{
      background-image: url("10.jpg");
  }
    .p1
    {

      width: 50%;
          margin-top: 20px;
      height:700px;
      border-radius: 15%;
      font-family: 'Monofett', cursive;
      font-family: 'Joti One', cursive;

    }

    .p2
    {
  font-family: 'Monofett', cursive;
  color:white;
  letter-spacing: 4px;
  word-spacing: 9px;
    }

.p7
{

  font-size: 30px;
  float: left;
}
div
{
  padding: 8px;
}
.bounce
{
  animation-duration: 3s;
}
.jello
{
  animation-duration: 2s;
}


  </style>
  <body>

       <h2 class="p2 text-center animated infinite bounce">Write your moments </h2>
       <div class="container p1 text-center">

          <form class="form-group" action="add.php" method="post" enctype="multipart/form-data">
              <div class="input-group">
                <span class="input-group-addon "><i class="glyphicon glyphicon-calendar animated infinite jello"></i></span>
                <input type="date" name="date" class="form-control" required>
              </div>

              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-pushpin animated infinite jello"></i></span>
                <input type="text" name="head" class="form-control" placeholder="title" required>
              </div>

              <div class="radio">
                  <span  class="glyphicon glyphicon-star p7 animated infinite jello"></span>
             <label><input type="radio" name="check" value="yes">Yes</label>
               <label><input type="radio" name="check" value="no">No</label>
                 </div>

                 <div class="radio">
                     <span  class="glyphicon glyphicon-globe p7 animated infinite jello"></span>
                <label><input type="radio" name="global" value="yes">Yes</label>
                  <label><input type="radio" name="global" value="no">No</label>
                    </div>

              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-file animated infinite jello"></i></span>
                <input type="file" name="uploadimage" class="form-control" required>
              </div>

              <div class="form-group text-left">
      <label for="comment">Comment:</label>
      <textarea class="form-control d1" id="h" rows="12" name="comment" placeholder="start writing  ur day" required></textarea>
            </div>
          <button type="button" onclick="call()" class="btn btn-warning btn-lg animated infinite jello">listen it !</button>
          <a href="https://www.google.com/intl/en/chrome/demos/speech.html" target="_blank" class="btn btn-success animated infinite jello">Speak now !</a>
             <input type="submit" value="save it !" class="btn btn-danger btn-lg animated infinite jello">
          </form>
       </div>
       <script>
       function call()
{
/*  var x = document.getElementsByClassName("form-control d1");
document.write(x[0].innerHTML);*/

 var x = document.getElementById("h").value;
   responsiveVoice.speak(x);

}
       </script>
  </body>
</html>
