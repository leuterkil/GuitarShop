<?php
include 'connection.php';
 ?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="IndexCSS.css">
    <link rel="stylesheet" href="signupCSS.css">
  </head>
  <body background="https://cdn.wallpapersafari.com/40/29/yUNO4z.jpg">
    <form class="" action="AddProduct.php" method="post">
      <div class="Texts">
        <input type="text" name="name_of_product" placeholder="Name Of Product..." class="Texts">
        <input type="text" name="price" placeholder="Price" class="Texts">
        <input type="text" name="cents" placeholder="Cents" class="Texts">
        <textarea name="description" rows="8" cols="80" placeholder="description..." class="Texts"></textarea>
        <input type="text" name="photo" placeholder="Place the photo path" class="Texts">
      <select class="choosebox" name="type">
        <option value="Guitars">Guitars</option>
        <option value="Drums">Drums</option>
        <option value="Microphones">Microphones</option>
        <option value="DJ">DJ</option>
      </select>
      <select class="choosebox" name="subtype">
        <option value="">**Guitars</option>
        <option value="Electric">Electric</option>
        <option value="Bass">Bass Guitars</option>
        <option value="Acoustic">Acoustic</option>
        <option value="7-String">7-String</option>
        <option value="8-String">8-String</option>
        <option value="12-String">12-String</option>
        <option value="Baritone">Baritone</option>
        <option value="Classical">Classical</option>
        <option value="Ukaleles">Ukaleles</option>
        <option value="">**Drums</option>
        <option value="Electric">Electric</option>
        <option value="Acoustic">Acoustic</option>
        <option value="Cymbals">Cymbals</option>
        <option value="Hardware">Drum Hardware</option>
        <option value="Sticks">Sticks</option>
        <option value="">**DJ</option>
        <option value="Set">DJ Set</option>
        <option value="Controllers">DJ Controllers</option>
        <option value="Headphones">DJ Headphones</option>
        <option value="Turntables">Turntables</option>
        <option value="CDPlayers">CD players</option>
        <option value="Mixers">Mixers</option>
      </select>
      <center><input type="submit" name="Addbtn" value="Add Product" class="Buttons"></center></div>
    </form>
  </body>
</html>
