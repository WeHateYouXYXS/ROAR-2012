<title> User Ban Submit Verification </title>
<?php
$servername = "mysql.ct8.pl";
$username = "m26459_users";
$password = "K7(5hxP5A$2F#qu@wiyC";
$dbname = "m26459_users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$bannedtransaction = "Yes";
// sql to delete a record
$sql = "UPDATE users SET banned = '" . $bannedtransaction . "' WHERE id = " . $_GET["rank"] . "";

if ($conn->query($sql) === TRUE) {
  echo "User banned successfully";
} else {
  echo "Error banning user: " . $conn->error;
}

$conn->close();
?>
<br>
<br>