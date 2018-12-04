<?php include 'Header.html';
$con=mysqli_connect("localhost","root","");
  mysqli_select_db($con,"guitar_shop");

  $type = $_GET["type"];
  $sub = $_GET["subtype"];
  if($sub =="")
  {
    $sql = "Select * FROM products Where type = '".$type."'";
  }
  else
  {
  $sql = "Select * FROM products Where type = '".$type."' And subtype ='".$sub."'";
}
  $result = mysqli_query($con,$sql);
  if (!$result) {
    // code...
  }
  else {
if (mysqli_num_rows($result) == 0)
  {

  }
  else{

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="ProductCSS.css">
  </head>
  <body>
      <table id="catalog">
        <!-- first tr has th for product and th for description-->
        <tr>
          <th><i>Product</i></th>
          <th><i>description</i></th>
          <th><i>Price</i></th>
        </tr>
        <?php
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
        $price=$row["price"];
        $name=$row["name"];
        $desc=$row["description"];
        $type=$row["type"];
        $subt=$row["subtype"];
        $photo=$row["photo"];
        $cents = $row["cents"];

        echo  "<tr>";
            echo"<td><span id=decimalfont>".$name."</span><br><img src=".$photo." width = 128 height = 128></td>";
            echo"<td>".$desc."</td>";
            echo"<td><b><span id=decimalfont>".$price.",</span>".$cents."€</b></td>";
          echo"</tr>";
      }
    }
    }
        ?>
      </table>

  </body>
</html>
