<?php
include 'connection.php';
$prid=$_GET['id'];
$query = "delete from cart where product_idcart=".$prid;

$result = mysqli_query($con,$query);
if (!$result) {
  mysqli_error($con);
}
else {
  header("location:cart.php");
}
 ?>
