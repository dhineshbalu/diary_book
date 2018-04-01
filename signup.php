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
     die("not connected..........");
   }
   else {
     echo "<h2>connecting......</h2>";
   }

   $user = $_POST["username"];
   $pass = $_POST["password"];
   $mobi = $_POST["number"];
   $email = $_POST["email"];

    $stmt= $conn->prepare("insert into verify(username,email,number,password) values(?,?,?,?)");
    $stmt->bind_param("ssss",$user,$email,$mobi,$pass);
    if($stmt->execute()==true)
    {
      echo "
      <script>
      setTimeout(function()
      {
           window.location.assign('login.html');
      },2000);

      </script>
      ";
    }
    else {
      echo "
      <script>
       window.location.assign('signup.html');
      </script>
      ";
    }
}

?>
