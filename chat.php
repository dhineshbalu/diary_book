<?php
include('db.php');
  $sql = "select * from chatdata ORDER BY date ASC";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc())
  {
 ?>
 <div class="chat_data">
    <span class="text-danger f1" ><?php echo $row["username"]; ?>  : </span>
    <span class="text-success"><?php echo $row["message"]; ?></span>
    <span style="float:right;"><?php echo $row["date"]; ?></span>
    <hr>
 </div>
<?php } ?>
