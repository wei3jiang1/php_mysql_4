<?php
	$host = 'localhost';
	$dbUser = 'root';
	$dbPass = null;
    $dbName = 'sitepoint';

if (!$dbConn = mysql_connect($host,$dbUser,$dbPass)) {
    die('Could not connect to server');
}

if (!mysql_select_db($dbName,$dbConn)) {
    die('Could not select database');
}

echo 'Connection successful!';

mysql_close($dbConn);
?>
