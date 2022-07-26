<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'st';

$con = mysqli_connect($host,$username,$password, $database);
if (!$con) {
	echo "Connection Failed!".mysqli_error();
}

?>