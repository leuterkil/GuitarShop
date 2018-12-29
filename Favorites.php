<?php
include 'connection.php';
include 'Header.html';
?>
<table id="catalog">
  <!-- first tr has th for product and th for description-->
  <tr>
    <th><i>Product</i></th>
    <th><i>description</i></th>
    <th><i>Price</i></th>
  </tr>
<?php

$query = "select * from favorites,products where user_id=".$_SESSION["uid"]." and favorites.product_id=products.id";

$result = mysqli_query($con,$query);

if (!$result) {
  echo mysqli_error($con);
}
else {
  while ($row = mysqli_fetch_assoc($result)) {
    $product_id = $row["id"];
    $price=$row["price"];
    $name=$row["name"];
    $desc=$row["description"];
    $type=$row["type"];
    $subt=$row["subtype"];
    $photo=$row["photo"];
    $cents = $row["cents"];
    ?>

      <tr>
        <td><span id="decimalfont"><?=$name?></span><br><a href = "Purchases.php?id=<?=$product_id?>">
        <img src="<?=$photo?>" width = "128" height = "128"></a></td>
        <td><?=$desc?></td>
        <td><b><span id="decimalfont"><?=$price?>,</span><?=$cents?>€</b>
           <a href="removefromfav.php?id=<?=$product_id?>"><i class="fa fa-heart" style="font-size:36px;float:right;color:red;"></i></a></td>
      </tr>
    <?php
  }
}
 ?>
