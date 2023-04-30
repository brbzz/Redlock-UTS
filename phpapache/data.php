<?php
// Connect to the database
$servername = "172.18.0.4";
$username = "root";
$password = "inipasswordsaya";
$dbname = "Redlock";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection Failed: " . mysqli_connect_error());
}

// Display all users
$sql = "SELECT COUNT(*) AS TOTAL FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	$row["TOTAL"];
}

else {
	echo "No users found..";
}

// Close the database connection
mysqli_close($conn);
?>
