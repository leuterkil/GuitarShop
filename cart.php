<?php
include 'connection.php';
include 'Header.html';

$query = "select * from cart,products where user_idcart =".$_SESSION["uid"]." and cart.product_idcart=products.id";

$totalPrice =0;
$result = mysqli_query($con,$query);
$i=0;

if (!$result) {
  echo mysqli_error($result);
}
else {
  if (mysqli_num_rows($result)==0) {
    echo "No Products On Cart";
  }
  else {
    ?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="IndexCSS.css">
        <link rel="stylesheet" href="ProductCSS.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title></title>
      </head>
      <body>

    <table id="catalog">
    <tr>
    <th> <i>product</i></th>
    <th><i>price</i></th>
    </tr>
    <?php
    while ($row=mysqli_fetch_assoc($result)) {
      $product_id = $row["product_idcart"];
      $product_name = $row["name"];
      $product_price = $row["price"];
      $product_cents = $row["cents"];
      $allprice = $product_price + (0.01*$product_cents);
      $totalPrice = $totalPrice+$allprice;
      $arrayProducts[$i] = $product_id;
      $i++;
      ?>
      <tr>
        <td><?=$product_name?></td>
        <td> <span id="decimalfont"> <b><?=$product_price?></span>.<?=$product_cents?>€</b></td>
        <td> <a href="removefromcart.php?id=<?=$product_id?>">remove from cart</a> </td>
      </tr>
      <?php
    }
    $pro = htmlentities(serialize($arrayProducts));
    echo "<tr><td>Total price</td><td>".$totalPrice."</td></tr>";
    echo"</table>";
    ?>
    <br>
    <form class="" action="purchaseCheck.php" method="get">
      <button type="submit" name="prod" value="<?=$pro?>" class="Buttons"> Buy</button>
    </form>
    <?php
    echo "</body>
    </html>";
  }
}
 ?>
