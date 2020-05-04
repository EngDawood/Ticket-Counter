<?php

include 'signup2.php';
$UserID= $_POST['UserName'];
$Password= $_POST['Password'];

$sql = "SELECT * FROM login_proj WHERE usid = '$UserID' AND Password = '$Password'";
$result = $conn->query($sql);

if(!$row = $result -> fetch_assoc())
{
	echo "Incorrect Login Id or Password";
} else {
	header("Location: dsw project.html");
}
		
?>