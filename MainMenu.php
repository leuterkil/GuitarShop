<?php
include 'connection.php';
include 'Header.html';
$username = $_SESSION["username"];
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
    <span class="Welcome"><b>Top 10 Sellers</b><br><br>
      <span class="Welcome"><b>Just added</b><br><br>

      </center>

</div>
  </body>
</html>
<?php
 include 'footer.html'; ?>
