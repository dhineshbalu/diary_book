<?php
session_start();
include('db.php');
  $sql = "select * from privatechat where (clientname='".$_SESSION["clientname"]."' and servername='".$_SESSION['servername']."') or (clientname='".$_SESSION["servername"]."' and servername='".$_SESSION['clientname']."') ORDER BY time ASC";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc())
  {
 ?>
 <div class="chat_data">
    <span class="text-danger f1" ><?php echo $row["clientname"]; ?>  : </span>
    <span class="text-success"><?php echo $row["message"]; ?></span>
    <span style="float:right;"><?php echo $row["time"]; ?></span>
    <hr>
 </div>
<?php } ?>
