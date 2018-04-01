<?php
session_start();
include("db.php");
   if($_SERVER["REQUEST_METHOD"]=="GET")
   {
     $_SESSION["clientname"] = $_SESSION["username"];
    $_SESSION["servername"] = $_GET["user"];
   }
 ?>
 <!doctype html>
 <html>
   <head>
      <title>chat with ur friend </title>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="love.png">
<link href="https://fonts.googleapis.com/css?family=Caveat|Concert+One|Cookie|Kaushan+Script|Pacifico|Righteous" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>
   <script>
function ajax()
{
var http = new XMLHttpRequest();
http.open('GET','private.php',true);
http.onreadystatechange = function()
{
  if(http.status==200 && http.readyState==4)
  {
    document.getElementById('chat').innerHTML = http.responseText;
  }
}
http.send();
}
setInterval(function()
{
   ajax();
},1);
</script>
   <style>
   input
{

  margin-top:15px;
  margin-bottom: 15px;
}
.f1
{
 font-size: 18px;
}
body
{
  font-family: 'Righteous', cursive;
  font-family: 'Concert One', cursive;
  font-family: 'Kaushan Script', cursive;
  font-family: 'Caveat', cursive;
  font-family: 'Cookie', cursive;
  font-family: 'Pacifico', cursive;
  letter-spacing: 2px;
  word-spacing: 13px;
}
.g1
{
  font-size: 30px;
  margin-left: 25px;
  margin-top: 10px;
  color:black;
}
   </style>
   <body onload="ajax();">
<a title="back to main page"href="body.html"><span class="glyphicon glyphicon-fast-backward g1"></span></a>
     <div class="  container chat_box c1">
      <div id="chat"></div>
      </div>

      <div class="container">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-group  text-center">
                  <textarea type="text" class="form-control" name="message" rows="5" placeholder="enter message..." required></textarea>
               <input type="submit" class="btn btn-success btn-lg" value="send">
            </form>
          </div>

          <?php
                if($_SERVER["REQUEST_METHOD"]=="POST")
                {
                  $cname = $_SESSION["clientname"];
                  $sname = $_SESSION["servername"];
                $msg = $_POST["message"];

                ////  $msg = $_POST["message"];
                 $sql = "insert into privatechat(clientname,servername,message) values('$cname','$sname','$msg')";
                $run = $conn->query($sql);
                }
           ?>
   </body>
 </html>
