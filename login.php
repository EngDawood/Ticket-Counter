<?php



$conn = mysqli_connect("localhost", "root","","login_proj");

$UserID= $_POST['UserName'];

$Password= $_POST['Password'];



$sql = "SELECT * FROM sign_up WHERE usid = '$UserID' AND Password = '$Password'";

$result = $conn->query($sql) or die($conn->error);



if(!$row = $result->fetch_assoc())

{

	echo "Incorrect Login Id or Password";

} else {

	header("Location: dsw.html");

}

		

?>