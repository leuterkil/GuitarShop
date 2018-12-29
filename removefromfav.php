<?php
include 'connection.php';
include 'Header.html';

$product_id = $_GET["id"];

$query = "delete from favorites where user_id=".$_SESSION["uid"]." and product_id =".$product_id;

$result = mysqli_query($con,$query);
if (!$result) {
  echo mysqli_error($con);
}

else {
  header("location:Favorites.php");
}
 ?>
