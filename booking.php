
<html>
<head>
<script src="javacode.js"></script>
<title> TICKET COUNTER </title>
<LINK type="text/CSS" rel="stylesheet" href="cssproject.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="hover.css">
<style> 
#immgg
{
	float:left;
	position: absolute;
}
</style>
</head>
<body background ="wallp1.jpg"=>
	<img id="immgg" src="logo2.png" width="100">
	<center>
	<h1><font size="10" face="BankGothic Lt BT"> TICKET COUNTER </font></h1>
	<hr>
	<br>
	<br>
	<div class="w3-dropdown-hover">
  <button class="w3-btn w3-red"><font face="BankGothic Lt BT">Options</button>
  <div class="w3-dropdown-content w3-border">
    <a href="dsw%20project.html">Main Menu</a>
    <a href="loginpage.php">Log Out</a>
  </div>
  </div>
  <div class="w3-dropdown-hover">
  <button class="w3-btn w3-red">Movies</button>
  <div class="w3-dropdown-content w3-border">
    <a href="hollywood.html">Hollywood</a>
    <a href="bollywood.html">Bollywood</a>
  </div>
</div>
  <div class="w3-dropdown-hover">
  <button class="w3-btn w3-red">Events</button>
  <div class="w3-dropdown-content w3-border">
    <a href="fest.html">Fest</a>
    <a href="concert.html">Live Shows</a>
  </div>
</div>
  <div class="w3-dropdown-hover">
  <button class="w3-btn w3-red">Reviews</button>
  <div class="w3-dropdown-content w3-border">
    <a href="writereview.html">Write A Review</a>
    <a href="readreview.html">Read A Review</a>
  </div>
</div>
  	<div class="w3-dropdown-hover">
  <button class="w3-btn w3-red">Bookings</button>
  <div class="w3-dropdown-content w3-border">
    <a href="booking.php">Movie</a>
    <a href="booking2.php">Event</a>
  </div>
  </div>
<h1><font size="15"><font face="BankGothic Lt BT"> YOUR TICKET HAS BEEN BOOKED </h1>
</body>
</html>

<?php
$conn = mysqli_connect("localhost", "root","root","login_proj");

$name= $_POST['name'];
$number= $_POST['number'];
$Mname = $_POST['mname'];
$tnum = $_POST['tnum'];
$ccn = $_POST['CreditCardNo'];

$sql = "INSERT INTO booking('name', 'number', mname, tnum,CreditCardNo) 
VALUES ('$name', '$number', '$Mname', '$tnum', '$ccn')";
$result = $conn->query($sql);

$output = "";

$query = mysqli_query($conn,"SELECT ticket_id FROM booking WHERE name LIKE '%$name%' ");
$count1 = mysqli_num_rows($query);
 if ($count1!=0) 
{
  while ( $row == mysqli_fetch_array($query))
	{
		$id = $row['ticket_id'];
		$output = '<div> <p><font face="BankGothic Lt BT"> YOUR Ticket Number is</p>'.$id.'</div><p>--------------------------------------</p>';
	}

} 
  else 
  {
     
	  $output = 'No id found';	
	}
print "$output";
?>