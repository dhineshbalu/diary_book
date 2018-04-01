<?php
$token = 'AQ94Ytbg82';
$mobile = mysql_real_escape_string($_POST['phone']);
$msg = mysql_real_escape_string($_POST['message']);
$site = 'howi';
$url = "http://api.fast2sms.com/sms.php?token=".$token."&mob=".$mobile."&mess=".$msg."&sender=".$site."&route=0";
$homepage = file_get_contents($url);
if($homepage)
{
  echo "Message Send Compleated..";
}
else{
  echo "Something Went Wrong...";
}
?>
