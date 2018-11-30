<?php
//$con=mysqli_connect("localhost","root","");
 // mysqli_select_db($con,"forum_bandicians");
$username = $_POST["Username_signup"];
$password = $_POST["pass_signup"];
$Rpassword = $_POST["repeatPass"];
$mail = $_POST["Email"];
$Fname = $_POST["FullName"];
$Country = $_POST["Country"];
$error="background-color:red;";
$errorRpass="";
$errorUsername="";
$errorEmail="";
if ($password!=$Rpassword) { $errorRpass = $error;}
elseif(strlen($password)<6){$errorRpass = $error;}
elseif(!isset($username)){$errorUsername=$error;}
elseif(!isset($mail)){$errorEmail=$error;}
else {
header('location: Index.html');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="signupCSS.css">
    <title>Sign Up</title>
  </head>
  <body background="https://cdn.wallpapersafari.com/40/29/yUNO4z.jpg">
    <div class="w3-container">
    <table align="center">
      <tr>
        <td class="formBackground">
          <form method="post" action="signupcheck.php">
             <span class="header"> <b>Fill the boxes with your data</b></span><br><br>
             Username*:<br>
             <input type="text" name="Username_signup" placeholder="Pick a Username..." class="Texts" style=<?=$errorUsername?>><br>
             password*:<br>
             <input type="password" name="pass_signup" placeholder="Your Password" class="Texts" style=<?=$errorRpass?>><br>
             <?php  ?>the password must contain at least 6 characters <br><br>
             Repeat Password*: <br>
             <input type="password" name="repeatPass" placeholder="Repeat Your Password Again" class="Texts" ><br>
             Email Adress*:<br>
             <input type="email" name="Email"placeholder="ex.you@yahoo.com" class="Texts"style=<?=$errorEmail?>><br>
             Full Name:<br>
             <input type="text" name="FullName"placeholder="Full Name..." class="Texts"><br>
             Country of region:<br>
             <select class="choosebox" name="Country">
               <option value="Greece">Greece</option>
               <option value="USA">USA</option>
               <option value="Italy">Italy</option>
               <option value="Spain">Spain</option>
             </select><br>
             <center><input type="submit" name="Signup_Button2" value="Register" class="Buttons"></center>
           </form>
         </td>
      </tr>
    </table>
    </div>
  </body>
</html>
