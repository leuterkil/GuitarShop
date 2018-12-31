
<?php
include 'Header.html';
include 'connection.php';

$product_id = $_GET["id"];

$query = "insert into cart (user_idcart,product_idcart)values(".$_SESSION["uid"].",".$product_id.")";
$result = mysqli_query($con,$query);

if(!$result)
{
  echo mysqli_error($con);
}
else {
 Header("location:MainMenu.php");
 echo "<i style = color:white;font-size:36px;>product Added to cart";?> <a href="MainMenu.php">go back</i></a> <?php
}
 ?>
