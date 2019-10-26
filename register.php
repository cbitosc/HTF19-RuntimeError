<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Please Register for enter</title>

	<script src="js/jquery-1.10.2.js"></script>
  	<script src="js/bootstrap.js"></script>
  	<script src="js/jquery.selectlistactions.js"></script>

  	<link rel="stylesheet" href="css/bootstrap.css">
  	<link rel="stylesheet" href="css/site.css">

  	<style type="text/css">
  		h1{background-color: #FFE333;color:white;margin-left: 100px;margin-right: 100px; border-radius: 10px;}
		h2{color: #FFE333;background-color: #000066;margin-left: 500px;margin-right: 500px; border-radius: 10px;}

		.a{ margin-left: 100px; margin-right: 100px;background-color:#000066;border-radius:10px;}

   body{
   	height:100%;
   width:100%;
    font-family: Arial, Helvetica, sans-serif;
   background-image:url(placeholder.jpg);/*your background image*/
   background-repeat:no-repeat;/*we want to have one single image not a repeated one*/
   background-size:cover;/*this sets the image to fullscreen covering the whole screen*/
   /*css hack for ie*/
   filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='.image.jpg',sizingMethod='scale');
   -ms-filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.jpg',sizingMethod='scale')";
	}
  	</style>

</head>
<body>
	<?php
$er="";
$done="";
	if (isset($_POST['register'])) {
		require_once('db.php');
		$username=$_POST['username'];
		$password=$_POST['passwd'];
		$email=$_POST['email'];
		$qu2=mysqli_query($con,"SELECT * FROM `register` WHERE `password`=md5('$password') AND `username`='$username'");
		if(!$qu2)
		{
			die();
		}
   		$count = mysqli_num_rows($qu2);
     	 if ($count == 1)
			  {
     	 	$er="not possible";
     	 }
     	 else
     	 {
			$qu1=mysqli_query($con,"INSERT INTO `register` ( `username`, `password`, `email`) VALUES ( '$username', MD5('$password'), '$email')");
			if(!$qu1)
			{
				echo 'Not created';
			}
			else
			{
				$done="Registration done!!";
				header("Location: login_valid.php");


		  }
	}

}

 ?>

	<img align="left" src="images.jpg" height="100" width="100" style="margin-top: 15px;" />
	<img align="right" src="images.jpg" height="100" width="100" style="margin-top: 15px;"/>
	<div class="a">
		<h2 style="background-color:#FFE333; margin-left:100px; margin-right:100px; color: #FFFFFF" align="center"><strong>CHAITANYA BHARTI INSTITUTE OF TECHNOLOGY</strong></h1>
		<h1 align="center"><strong>PLACEMENT AND TRAINING CELL</strong></h1>
	</div>

	<div style="margin:70px 200px 100px 350px;width: 700px;height: 420px; background-color: white;border-width: 20px;border-style: ridge;border-color: #000066;">
		<h3 style="color:black; padding-left: 200px"><b>Register Your Details</b></h3>
		<form action="" method="post" style="font-size: 20px; margin: 20px 20px 5px 50px; color: #000066 ">
			<label style="margin-top: 15px">  Email:</label>
			<input type="email" name="email" placeholder="" value="" style="margin-left:53px;width: 400px" required>
			<label  style="margin-top: 20px">Username:</label >&nbsp;&nbsp;
			<input type="text" name="username" value="" maxlength="8" placeholder="  username" style="width: 400px" required>
			<label  style="margin-top: 25px">Password:</label>
			<input type="Password" name="passwd" placeholder=" password(8)" value=""  maxlength="8" style="width: 150px" required>




			<span style="color: red;"><?php echo $er;echo $done; ?></span>
			<br/><br/>
			<input type="submit" name="register" class="btn btn-success" value="Register" style="margin-left:50px;width: 150px;height: 50px">
			<input type="reset" class="btn btn-warning" style="margin-left:30px;width: 150px;height: 50px">
			<a href="index.php" class="btn btn-primary" style="margin-left:30px;font-size: 15px; width: 150px;height: 50px">Back</a>

		</form>
	</div>



</body>
</html>
