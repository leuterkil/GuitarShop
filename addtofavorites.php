<?php
include 'connection.php';
include 'Header.html';

$product_id = $_GET["id"];

$query = "Update products SET favorite = 1 WHERE id =".$product_id;

$result = mysqli_query($con,$query);
if (!$result) {
  echo mysqli_error($con);
}

else {
  header("location:Favorites.php");
}
 ?>
