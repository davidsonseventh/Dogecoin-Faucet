<?php

// Database Configuration

$dbHost = "localhost";
$dbUser = "faucet";
$dbPW = "dogecoin";
$dbName = "dogecoin";

// Establish connection

$mysqli = mysqli_connect($dbHost, $dbUser, $dbPW, $dbName);

// Check connection
if(mysqli_connect_errno()){
 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$link[1] = "http://ouo.io/api/JAoLrOED?s=http://cryptoclick.xyz/link.php?k={key}&format=text";

$link[2] = "http://btc.ms/api/?api=86b6c147ce28028e5c7762afce1656f898279889&url=http://coinbox.club/tung/link.php?k={key}&format=text";

$link_default ='http://btc.ms/api/?api=86b6c147ce28028e5c7762afce1656f898279889&url=http://coinbox.club/tung/link.php?k={key}&format=text';

// Website

$Website_Url = "http://cryptoclick.xyz/";

?>