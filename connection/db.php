<?php
$hostname = "localhost";
$database = "hp";
$username = "root";
$password = "";


// Make the connection:
$hp = mysql_connect($hostname, $username, $password);

@$mydb=mysql_select_db($database,$hp);

if (!$ntrl) {
    trigger_error('Could not connect to the database: ' . mysqli_connect_error());
	}
?>
