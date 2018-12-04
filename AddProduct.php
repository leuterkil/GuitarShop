<?php
include 'connection.php';
$name = $_POST["name_of_product"];
$price = $_POST["price"];
$cents = $_POST["cents"];
$type = $_POST["type"];
$sub = $_POST["subtype"];
$desc = $_POST["description"];
$photo = $_POST["photo"];

$query = "insert into products(name,price,cents,type,subtype,description,photo,datee)values('".$name."',".$price.",".$cents.",'".$type."','".$sub."','".$desc."','".$photo."',NOW())";
$result = mysqli_query($con,$query);
if (!$result) {

}
else {
  header("location:adminWindow.php");
}
 ?>
