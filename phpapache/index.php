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
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	echo "<table>";
	echo "<tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Jabatan</th></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>" . $row["ID"] . "</td>";
		echo "<td>" . $row["Nama"] . "</td>";
		echo "<td>" . $row["Alamat"] . "</td>";
		echo "<td>" . $row["Jabatan"] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
}

else {
	echo "No users found.";
}

// Close the database connection
mysqli_close($conn);
?>
