<?php
include 'Header.html';
include 'connection.php';
$user_id = $_SESSION["uid"];
$pro = unserialize($_GET["prod"]);

for ($i=0; $i <count($pro); $i++) {
  $product_id = $pro[$i];
  $addpurchase = "insert into purchases (user_id,product_id,dateofpur) values(".$user_id.",".$product_id.",NOW())";
  $result = mysqli_query($con,$addpurchase);
  if (!$result) {
  echo mysqli_error($con);
  }
  else {
    $removefromcart = "delete from cart where user_idcart=".$user_id;
    $resultrem = mysqli_query($con,$removefromcart);
    Header("location:MainMenu.php");
    ?> <i style = "font-size:36px;color:white;">Products Successfully Purchased <a href="MainMenu.php">Go Back</a> </i> <?php
    if ($resultrem) {


    }

    ?>

    <?php
  }
}?>
