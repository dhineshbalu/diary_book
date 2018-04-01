<?php
 session_start();

 if($_SERVER["REQUEST_METHOD"]=="POST")
 {

 $servername="localhost";
 $username="root";
 $password="";
 $dbname="dairy";

 $conn = new mysqli($servername,$username,$password,$dbname);
  if($conn->connect_error)
  {
    die("not connected..........");
  }
  else {
    echo "<h2>connecting......</h2>";
  }

  $user = $_POST["user"];

  $g=0;
  $sql = "select * from verify where username='$user'";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc())
  {
    if($row["username"]==$user)

    {
       echo "
       <script>
       setTimeout(function()
     {
          window.location.assign('filltheform.php');
     },2000);
       </script>
       ";
      $g=1;
      break;
    }
  }
  if($g==0)
  {

    echo "
    <script>
    setTimeout(function()
  {

       window.location.assign('writememories'.php');

  },2000);
    </script>
    ";


  }

}
 ?>
