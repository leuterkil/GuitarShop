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
?>
  <script type="text/javascript">
  document.getElementById('errorLog').innerHTML = "Wrong Username or Password";
  document.getElementById('username_log').style.borderColor="red";
 document.getElementById('username_log').style.borderStyle="solid";
  </script>
  <?php
}
else {
  if (mysqli_num_rows($result)==0) {
    ?>
    <script type="text/javascript">
    document.getElementById('errorLog').innerHTML = "Wrong Username or Password";
    document.getElementById('username_log').style.borderColor="red";
   document.getElementById('username_log').style.borderStyle="solid";
    </script>
    <?php
  }
  else {
  while ($row = mysqli_fetch_assoc($result)) {
    $_SESSION["uid"] = $row["id"];
  }
Header('location:MainMenu.php');
}}
 ?>
