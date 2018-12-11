<?php
include 'Header.html';
include 'connection.php';
$user_id = $_SESSION["uid"];
$product_id = $_GET["id"];
$addpurchase = "insert into purchases (user_id,product_id,dateofpur) values(".$user_id.",".$product_id.",NOW())";
$result = mysqli_query($con,$addpurchase);
if (!$result) {
echo mysqli_error($con);
}
else {
  ?>
  <center><b><span style="font-size:20px;color:white;">Purchase Successful <a href="MainMenu.php">Go Back and buy more</a> </span></b></center>
  <?php
}?>
