
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
<body background ="92.jpg"=>
	<img id="immgg" src="logo2.png" width="100">
	<center>
	<h1><font size="10" face="BankGothic Lt BT"> TICKET COUNTER </font></h1>
	<hr>
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
    <a href="booking.html">Movie</a>
    <a href="booking2.html">Event</a>
  </div>
  </div>
<h2><font face="BankGothic Lt BT">REVIEWS</h2>
<br>

<?php

$conn = mysqli_connect("localhost", "root","","login_proj");

if(!isset($_POST['search']) ) {
	header("location :readrewiev.html");
}

$output = "";

$search = $_POST['moviename'];

$query = mysqli_query($conn,"SELECT * FROM reviews WHERE mname LIKE '%$search%' ");
$count = mysqli_num_rows($query);
 if ($count == 0) 
{
	$output = 'No RESULT';
} 
	else {
	while ( $row = mysqli_fetch_array($query))
	{
		$review = $row['review'];
		$rate = $row['rate'];
		$name = $row['name'];
		$output .= '<div> <p><b> Name of User-</b></p>'.$name.'<p><b> Review-</b></p>'.$review .'<p><b> Rating(out of five) </b></p>'.$rate.'</div><p>--------------------------------------</p>';
	}
	}
print ("$output");

?>
</body>
</html>