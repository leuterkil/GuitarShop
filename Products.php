<?php
include 'connection.php';
include 'Header.html';


function favoriteCheck($product,$connection)
{
  $fav="select * from favorites where user_id=".$_SESSION["uid"]." and product_id=".$product;
  $resultfav = mysqli_query($connection,$fav);
  if(!$resultfav)
  {
    echo mysqli_error($resultfav);
  }
  else {
    if(mysqli_num_rows($resultfav)==0)
    {
      return 0;
    }
    else {
      return 1;
    }
  }
}

$startrow = $_GET['startrow'];
  if(strlen($_GET["search"])>=1)
  {
      $search = $_GET["search"];
        $sql = "Select * FROM products Where name LIKE '%".$search."%'LIMIT ".$startrow.",10";
        $currentlink = "Products.php?search=".$search;
  }
 else if($_GET["subtype"] ==null)
  {
    $type = $_GET["type"];
    $sql = "Select * FROM products Where type = '".$type."'LIMIT ".$startrow.",10";
    $currentlink = "Products.php?type=".$type."&subtype=&search=";
  }
  else if(isset($_GET["subtype"]))
  {
    $type = $_GET["type"];
    $sub = $_GET["subtype"];
  $sql = "Select * FROM products Where type = '".$type."' And subtype ='".$sub."'LIMIT ".$startrow.",10";
  $currentlink = "Products.php?type=".$type."&subtype=".$sub."&search=";
}
  $result = mysqli_query($con,$sql);
  if (!$result) {
    echo mysqli_error($con);
  }
  else {
if (mysqli_num_rows($result) == 0)
  {

  }
  else{
    if(!isset($startrow))
    $startrow=0;
    $maxrow=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="ProductCSS.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        $product_id = $row["id"];
        $price=$row["price"];
        $name=$row["name"];
        $desc=$row["description"];
        $type=$row["type"];
        $subt=$row["subtype"];
        $photo=$row["photo"];
        $cents = $row["cents"];
        $favorited = favoriteCheck($product_id,$con);

        if($favorited==0)
        {
          $heartstatus="fa fa-heart-o";
        }
        else {
          $heartstatus = "fa fa-heart";
        }
?>
        <tr>
            <td><span id="decimalfont"><?=$name?></span><br><a href = "Purchases.php?id=<?=$product_id?>">
            <img src="<?=$photo?>" width = "128" height = "128"></a></td>
            <td><?=$desc?></td>
            <td><b><span id="decimalfont"><?=$price?>,</span><?=$cents?>€</b>
              <?php
              if ($heartstatus=="fa fa-heart") {
                $link = "removefromfav.php";
              }
              else {
                $link = "addtofavorites.php";
              }
               ?>
               <a href="<?=$link?>?id=<?=$product_id?>"><i class="<?=$heartstatus?>" style="font-size:36px;float:right;color:red;"></i></a></td>
          </tr>
      <?php
      }
    }
    }
        ?>
      </table>
      <?php
      if ($startrow==0&&$maxrow==10) {
        ?>
        <center><a href="<?=$currentlink?>&startrow=<?=$startrow+10?>">Next</a></center>
        <?php
      }

    else  if ($maxrow==10) {
        ?>
        <center><a href="<?=$currentlink?>&startrow=<?=$startrow-10?>">Previous</a></center>
        <center><a href="<?=$currentlink?>&startrow=<?=$startrow+10?>">Next</a></center>
        <?php
      } else if($startrow>=10) {
        ?>
        <center><a href="<?=$currentlink?>&startrow=<?=$startrow-10?>">Previous</a></center>
        <?php
      }
      else {

      }

       ?>


  </body>
</html>
