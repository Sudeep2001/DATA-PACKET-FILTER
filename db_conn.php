<?php

$sname= "localhost";
$unmae= "root";
$password = "Sudeep@123";
$db_name = "login";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
else{
	echo "Connected Successfully";
}
