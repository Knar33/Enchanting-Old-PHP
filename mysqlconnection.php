<?php
$mysqli = new mysqli(server, database, password, table);
if($mysqli->connect_errno > 0){
	die('Unable to connect to database [' . $mysqli->connect_error . ']');
}
global $mysqli;
?>