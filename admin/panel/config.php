<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'mysql.ct8.pl');
define('DB_USERNAME', 'm26459_users');
define('DB_PASSWORD', 'K7(5hxP5A$2F#qu@wiyC');
define('DB_NAME', 'm26459_users');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>