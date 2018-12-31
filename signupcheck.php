<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="signupCSS.css">
    <title>Sign Up</title>
  </head>
  <body background="https://cdn.wallpapersafari.com/40/29/yUNO4z.jpg">
    <?php
    $con=mysqli_connect("localhost","root","");
      mysqli_select_db($con,"guitar_shop");
    $username = $_POST["Username_signup"];
    $password = $_POST["pass_signup"];
    $Rpassword = $_POST["repeatPass"];
    $mail = $_POST["Email"];
    $Fname = $_POST["FullName"];
    $sur = $_POST["Surname"];
    $Country = $_POST["Country"];
    if ($password!=$Rpassword) { echo "password must be the same <a href=signup.php>go back</a>";}
    elseif(strlen($password)<6){ echo "password must be 6 characters long <a href=signup.php>go back</a>";}
    elseif(!isset($username)){ echo "enter a username <a href=signup.php>go back</a>";}
    elseif(!isset($mail)){ echo "enter a mail <a href=signup.php>go back</a>";}
    else {
    $query = "insert into users (username,pass,email,country,surname,Name) values('".$username."','".sha1($password)."','".$mail."','".$Country."','".$sur."','".$Fname."')";
    $result=mysqli_query($con,$query);
    if (!$result) {
      echo "something went wrong <a href=signup.php>go back</a>";
      echo mysqli_error($con);
    }
    else
    {
    header('location: Index.html');
    }
  }
  ?>
</body>
  </html>;
