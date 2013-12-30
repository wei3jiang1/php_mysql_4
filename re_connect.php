<?php
function &connectToDb($host,$dbUser,$dbPass,$dbName) {
    if (!$dbConn = @mysql_connect($host,$dbUser,$dbPass)) {
        return false;
    }
    
    if (!@mysql_select_db($dbName)) {
        return false;
    }
    return $dbConn;
}

$host = 'localhost';
$dbUser = 'wei';
$dbPass = 'wei';
$dbName = 'sitepoint';

$dbConn = &connectToDb($host,$dbUser,$dbPass,$dbName);
?>