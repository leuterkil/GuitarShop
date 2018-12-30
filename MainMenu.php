<?php
include 'connection.php';
include 'Header.html';
$username = $_SESSION["username"];
$recaddedquery = "Select * from products order by datee desc limit 5";
$top5="select name,product_id,id,photo,price,cents, count(purchases.product_id) from purchases,products where purchases.product_id=products.id group by purchases.product_id order by purchases.product_id desc "
$result1 = mysqli_query($con,$recaddedquery);
$result2 = mysqli_query($con,$top5);
if (!$result1) {

}
else {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="MenuColor">

    <br><center><span class="Welcome" align = "center"><b>Welcome <?=$username?> please fill free to explore our site</b></span><br>
    <img src="https://wh1k8zidop.inscname.net/games/images/map_img_1138084_1501023103.jpg" alt=""><br><br>
    <span class="Welcome"><b>Top 5 Sellers</b></span><br><br>
</center>
<table id="MainMenuProduct" border="3">
  <tr>
<?php  while($row2 = mysqli_fetch_assoc($result2)) {
  $id2 = $row2["id"];
        $price2=$row2["price"];
        $name2=$row2["name"];
        $photo2=$row2["photo"];
        $cents2 = $row2["cents"];
  // code...
?>
        <td><center> <a href="Purchases.php?id=<?=$id2?>"> <img src="<?=$photo2?>" style="width:50%"></a></center><br>
          <span id="decimalfont"><center><?=$name2?></span><br>
          <b><span id="decimalfont"><?=$price2?></span>.<?=$cents2?>€</b></center></td>
<?php } ?>
</tr>
</table>
      <center>
      <span class="Welcome"><b>Just added</b></span><br><br>
      </center>
      <table id="MainMenuProduct" border="3">
        <tr>
      <?php  while($row = mysqli_fetch_assoc($result1)) {
        $id = $row["id"];
              $price=$row["price"];
              $name=$row["name"];
              $photo=$row["photo"];
              $cents = $row["cents"];
        // code...
      ?>
              <td><center> <a href="Purchases.php?id=<?=$id?>"> <img src="<?=$photo?>" style="width:50%"></a></center><br>
                <span id="decimalfont"><center><?=$name?></span><br>
                <b><span id="decimalfont"><?=$price?></span>.<?=$cents?>€</b></center></td>
      <?php }} ?>
    </tr>
  </table>
</div>
  </body>
</html>
<?php
 include 'footer.html'; ?>
