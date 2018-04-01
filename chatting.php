<?php
session_start();
 include("db.php");
 ?>
<!doctype html>
<html>
<head>
   <title>
      chat application
   </title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

<script>
function ajax()
{
var http = new XMLHttpRequest();
http.open('GET','chat.php',true);
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
},10);
</script>
 </head>
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
font-family: 'Pacifico', cursive;
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
                    $name = $_SESSION["username"];
                    $msg = $_POST['message'];
                    $sql = "insert into chatdata(username,message) values('$name','$msg')";
                    $run = $conn->query($sql);

                  }
             ?>
</body>
</html>
