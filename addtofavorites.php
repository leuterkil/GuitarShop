<?php
include 'connection.php';
include 'Header.html';

$product_id = $_GET["id"];

$query = "insert into favorites (product_id,user_id)values(".$product_id.",".$_SESSION["uid"].")";

$result = mysqli_query($con,$query);
if (!$result) {
  echo mysqli_error($con);
}

else {
  header("location:Favorites.php");
}
 ?>
