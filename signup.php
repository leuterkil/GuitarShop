<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="signupCSS.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body background="https://cdn.wallpapersafari.com/40/29/yUNO4z.jpg">
  <div class="w3-container">
  <table align="center">
    <tr>
      <td class="formBackground w3-animate-opacity">
        <form method="post" action="signupcheck.php">
           <span class="header"> <b>Fill the boxes with your data</b></span><br><br>
           Username:<br>
           <input type="text" name="Username_signup" placeholder="Pick a Username..." class="Texts"><br>
           password:<br>
           <input type="password" name="pass_signup" placeholder="Your Password" class="Texts"><br>
           Repeat Password: <br>
           <input type="password" name="repeatPass" placeholder="Repeat Your Password Again" class="Texts"><br>
           Email Adress:<br>
           <input type="text" name="Email"placeholder="ex.you@yahoo.com" class="Texts"><br>
           Name:<br>
           <input type="text" name="FullName"placeholder="Name..." class="Texts"><br>
           Surname:<br>
           <input type="text" name="Surname"placeholder="Surname..." class="Texts"><br>
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
