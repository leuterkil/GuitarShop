
<?php
include 'purchaseCheck.php';
$cart = getArray();

for ($i=0; $i <count($cart) ; $i++) {
  echo $cart[$i];
}
 ?>
