<?php
session_start();
$error="";
if (isset($_POST['submit']))
{
  if (empty($_POST['username']) || empty($_POST['password'])){
      $error = "Please enter Username and Password";
  }
  else{
    $username=$_POST['username'];
    $password=$_POST['password'];
    require_once('db.php');
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysqli_real_escape_string($con,$username);
    $password = mysqli_real_escape_string($con,$password);
    $qu1= mysqli_query($con,"select * from register where password=md5('$password') AND username='$username'");
    $rows=mysqli_fetch_array($qu1);
    $count = mysqli_num_rows($qu1);
      if ($count == 1) {
        $_SESSION['login_user']=$username;
        $_SESSION['password']=$rows['password'];
        header("Location:dashboard.php");

      }
      else{
      $error = "Username or Password is invalid";
      }
      mysqli_close($con);
   }
 }
?>
<div class="form">
<h1>Log In</h1>`
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='register.php'>Register Here</a></p>
</div>
</body>
</html>
