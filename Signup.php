<?php

$conn = mysqli_connect("localhost", "root","","login_proj");
$sql="INSERT INTO sign_up(usid, FirstName, LastName, Password)

VALUES

('$_POST[UserName]','$_POST[FirstName]','$_POST[LastName]','$_POST[Password]')";

/*$UserID= POST['UserName'];

$FirstName= POST['FirstName'];

$LastName= POST['LastName'];

$Password= POST['Password'];



$sql = "INSERT INTO sign_up(usid, FirstName, LastName, Password) 

VALUES ('$UserID', '$FirstName', '$LastName', '$Password')";*/

$result = $conn->query($sql);

header("Location: loginpage.html");

?>