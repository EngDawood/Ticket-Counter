<?php
$conn = mysqli_connect("localhost", "root","","login_proj");

$name= $_POST['name'];
$Mname= $_POST['moviename'];
$review = $_POST['review'];
$rate = $_POST['rate'];

$sql = "INSERT INTO reviews(name, mname, review, rate) 
VALUES ('$name', '$Mname', '$review', '$rate')";
$result = $conn->query($sql);

header("Location: writereview.html");

?>