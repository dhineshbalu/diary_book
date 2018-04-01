<?php
session_start();
include("connection.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 $user = $_SESSION["username"];
$date = $_POST["date"];
$title=$_POST["head"];
$comment = $_POST["comment"];
$star = $_POST["check"];
$global= $_POST["global"];
function GetImageExtension($imagetype)
{
  if(empty($imagetype))
  return false;
  switch ($imagetype) {
    case 'image/bmp':
                 return '.bmp';
   case 'image/gif':
                  return '.bmp';
   case 'image/png':
                   return '.bmp';
   case 'image/jpg':
                    return '.jpg';

    default :
         return false;

  }
}



 if(!empty($_FILES["uploadimage"]["name"]))
 {

   $file_name = $_FILES["uploadimage"]["name"];
   $temp_name =  $_FILES["uploadimage"]["tmp_name"];
  $img_type=  $_FILES["uploadimage"]["type"];
   $ext = GetImageExtension($img_type);
   $imagename = date("d-m-Y")."-".time().$ext;
   $target_path = "images/".$imagename;

   if(move_uploaded_file($temp_name,$target_path))
   {
     $sql = "insert into dairydata(username,date,title,imagename,comment,starred,global) values('".$user."','".$date."','".$title."','".$imagename."','".$comment."','".$star."','".$global."')";
     if (mysqli_query($conn, $sql))
     {
       echo "connecting...";
       echo "
       <script>
       setTimeout(function()
       {
            window.location.assign('body.php');
       },2000);

       </script>
       ";
   }
    else {
      echo "<script>
       window.location.assign('add.php');
      </script>
      ";
   }
   }
   else {
     echo "<script>
      window.location.assign('add.html');
     </script>
     ";
   }
 }
 else {
   echo "<script>
    window.location.assign('add.php');
   </script>
   ";
 }
}

 ?>
