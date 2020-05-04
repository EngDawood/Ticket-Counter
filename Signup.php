<?php


include 'signup2.php';
$UserID= POST['UserName'];
$FirstName= POST['FirstName'];
$LastName= POST['LastName'];
$Password= POST['Password'];

$sql = "INSERT INTO sign_up(usid, FirstName, LastName, Password) 
VALUES ('$UserID', '$FirstName', '$LastName', '$Password')";
$result = $conn->query($sql);
header("Location: loginpage.html");
?>