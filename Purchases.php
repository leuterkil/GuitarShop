<?php
include 'Header.html';
include 'connection.php';

$product_id = $_GET["id"];
$user_id=$_SESSION["uid"];

$sqlgetproduct = "select * from products where id =".$product_id;
$sqlgetuser = "select *from users where id=".$user_id;

$resultUser = mysqli_query($con,$sqlgetuser);
$resultProduct = mysqli_query($con,$sqlgetproduct);

if(!$resultUser)
{

}
else {
  while($row = mysqli_fetch_assoc($resultUser))
  {
    $Name = $row["Name"];
    $sur = $row["surname"];
    $country = $row["country"];
  }
}

if(!$resultProduct)
{

}
else {
  while($row = mysqli_fetch_assoc($resultProduct))
  {
    $NameOfProduct = $row["name"];
    $photo = $row["photo"];
    $decimal = $row["price"];
    $cents = $row["cents"];
    $desc = $row["description"];
  }
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="HeaderCSS.css">
     <link rel="stylesheet" href="ProductsCSS.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
     <center><form class="SubmitPur" action="purchaseCheck.php" method="get">
       <img src=<?=$photo?> alt="" height="256px" width="256px"><h1><?=$NameOfProduct?></h1><br>
        <b><span id="decimalfontpur"><?=$decimal?></span>.<?=$cents?>€</b>
        <br> <button type="submit" name="id" value=<?=$product_id?>> <i class="fa fa-shopping-cart"></i> <b>Confirm Purchase</b></button>
        <h2> <i class="fa fa-id-badge"></i> <b><i><u>customer details</u></i></b></h2>
        <h3> <b> Name: <?=$Name?></b> </h3>
        <h3> <b> Surname: <?=$sur?></b> </h3>
        <h3> <b> Country: <?=$country?></b> </h3>
      </center>
      </form>
   </body>
 </html>
