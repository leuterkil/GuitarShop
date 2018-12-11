<?php
include 'connection.php';
include 'Header.html';
$username = $_SESSION["username"];
$recaddedquery = "Select * from products order by datee desc limit 5";
$result1 = mysqli_query($con,$recaddedquery);
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
    <span class="Welcome"><b>Top 10 Sellers</b></span><br><br>
      <span class="Welcome"><b>Just added</b></span><br><br>
      </center>
      <table id="MainMenuProduct" border="3">
        <tr>
      <?php  while($row = mysqli_fetch_assoc($result1)) {
              $price=$row["price"];
              $name=$row["name"];
              $photo=$row["photo"];
              $cents = $row["cents"];
        // code...
      ?>
              <td><center><img src="<?=$photo?>" style="width:50%"></center><br>
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
