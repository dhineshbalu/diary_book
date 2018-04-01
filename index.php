<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN"
"http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title>Send Free SMS </title>
    <meta http-equiv="expires" content="0"/>
    <meta http-equiv="Content-Language" content="en-us"/>
    <meta http-equiv="content-type" content="Text/html; charset=UTF-8"/>
    <meta name="charset" content="UTF-8"/>
    <meta name="distribution" content="Global"/>
    <meta name="rating" content="General"/>
    <link rel="stylesheet" href="animate.css">
    <meta name="robots" content="Index,follow"/>
    <meta name="revisit-after" content="3 Day"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
 <link rel="icon" href="love.png">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="favicon.ico"/>
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Great+Vibes|Yanone+Kaffeesatz" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Great+Vibes|Kaushan+Script|Yanone+Kaffeesatz|Yellowtail" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Great+Vibes|Kaushan+Script|Yanone+Kaffeesatz" rel="stylesheet">
  </head>
  <style>
  #p1
  {
    word-spacing: 7px;
    letter-spacing: 4px;
font-family: 'Abril Fatface', cursive;
  }
  #p2
  {
    letter-spacing: 3px;
    font-size: 25px;
    font-family: 'Abril Fatface', cursive;
    font-family: 'Yanone Kaffeesatz', sans-serif;
    font-family: 'Great Vibes', cursive;
  }
  #p3
  {
    font-family: 'Abril Fatface', cursive;
    font-family: 'Yanone Kaffeesatz', sans-serif;
    font-family: 'Great Vibes', cursive;
    font-family: 'Kaushan Script', cursive;
    letter-spacing: 3px;
  }
  input,textarea
  {
    font-size: 25px;
    letter-spacing: 3px;
    word-spacing: 5px;
    font-family: 'Abril Fatface', cursive;
    font-family: 'Yanone Kaffeesatz', sans-serif;
    font-family: 'Great Vibes', cursive;
    font-family: 'Kaushan Script', cursive;
    font-family: 'Yellowtail', cursive;
  }
  #d1
  {

    text-align: center;
  }
  #d2
  {
    margin-top: 10px;
  text-align: center;
  }
  .d2
  {
    margin-top:50px;
    width: 800px;
  }
  input
  {
    margin-top: 10px;
    margin-bottom: 10px;
  }
body{
  background-image: url("21.jpg");
  color:white;
  background-attachment: fixed;
}
.m1
{
font-family: 'Lobster', cursive;
margin-top: 10px;
letter-spacing: 3px;
word-spacing: 3px;
width: 800px;
}
.rubberBand
{
  animation-duration: 5s;
}
  </style>
  <body>
    <?php
        include("connection.php");
        $nu=" ";
     ?>
     <div class="container text-center m1 ">
       <h2 class="animated infinite rubberBand">Enter ur friend username</h2>
       <br>
       <form method="post" action="
          <?php
          echo htmlspecialchars($_SERVER["PHP_SELF"]);
          ?>">
          <div class="form-group">
            <input type="text" name="number" class="form-control" placeholder="username..">
          </div>
          <input type="submit" value="click it !" class="btn btn-success btn-lg animated infinite rubberBand">
        </form>
     </div><br>
     <?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
          {
           $num = $_POST["number"];
            $sql = "select number from verify where username='".$num."'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $nu =  $row["number"];
          }
      ?>

 <div class="container text-center d2">
        <form action="sendsms.php" method="post" id="myForm" class="form-group">
          <br>
          <label id="p2" class="animated infinite rubberBand">Phone number:</label>
          <input type="text" class="form-control" name="phone" value="  <?php echo $nu; ?>" placeholder="number"/>
          <br/>
          <label id="p2" class="animated infinite rubberBand">Message:</label>
          <textarea class="form-control" rows="10" placeholder="enter the message"  name="message"></textarea><br><br>
          <input type="submit" class="btn btn-outline-warning btn-lg animated infinite rubberBand"  value="Send" id="submit"/>
        </form>
       </div>
<br>


    <footer id="d2">
      <h3 id="p3" style="font-style:italic;color:black;"  >Powered By : <a style="color:white;"href="http://www.howi.in">dhineshbalu97@gmail.com<a/></h3>
    </footer>



    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="my_script.js"></script>
    <script>
        $(document).ready(function()
      {
            var end='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
      var   a = $(window).height();
      var   b =   $(window).scrollTop();
      var  c = $(window).height()+$(window).scrollTop();

        $.fn.reveal = function()
        {
           return this.each(function()
         {
           var d =$(this).offset();

           if(!$(this).hasClass("animated slideInLeft"))
           {

           if(c>d.top)
           {
                $(this).addClass("animated slideInLeft").one(end,function()
              {
                $(this).removeClass("animated slideInLeft");
              });
           }
         }
         });
        }

        $(window).scroll(function()
      {
         a = $(window).height();
         b =   $(window).scrollTop();
      c = $(window).height()+$(window).scrollTop();

  $("#d2").reveal();
      });


      });
      </script>
</body>
</html>
