<?php
include 'connection.php';
include 'Index.html';
$username = $_POST["Username_login"];
$_SESSION["username"] = $username;
$pass = $_POST["pass_login"];
$query = "Select * from users where username ='".$username."'and pass = '".sha1($pass)."'";
$result = mysqli_query($con,$query);
if(!$result)
{
  echo mysqli_error($con);
?>
  <script type="text/javascript">
  document.getElementById('errorLog').innerHTML = "Wrong Username or Password";
  document.getElementById('username_log').style.borderColor="red";
 document.getElementById('username_log').style.borderStyle="solid";
  </script>
  <?php
}
else {
Header('location:MainMenu.php');
}
 ?>
