<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'u430585285_hostel');
define('DB_USER', 'u430585285_hostel');
define('DB_PASSWORD', 'Bhavesh*123');
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db = mysqli_select_db($con, DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
