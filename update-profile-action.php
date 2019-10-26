<?php
  include 'db.php';
    if (isset($_GET['update_profile'])) {
	$user = $_GET['user'];
	$fullname = $_GET['fullname'];
	$age = $_GET['age'];
	$gender = $_GET['gender'];
	$address = $_GET['address'];
  // echo "$user";
	$update_profile = $con->query("UPDATE user SET full_name = '$fullname',
                      gender = '$gender', age = $age, address = '$address'
                      WHERE username = '$user'");
// echo "hii";
if ($update_profile) {
    echo "updated!!!";
    // echo "$user";
		header("Location: profile.php?user=$user");
	  } else {
		  echo $con->error;
	    }
	}
?>
