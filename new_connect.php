<?php
require_once 'Database/MySQL.php';

$host = 'localhost';
$dbUser = 'wei';
$dbPass = 'wei';
$dbName = 'sitepoint';

$db=&new MySQL($host,$dbUser,$dbPass,$dbName);

//$dbConn = &connectToDb($host,$dbUser,$dbPass,$dbName);

$sql = "SELECT * FROM articles ORDER BY title";

$result = $db->query($sql);

$queryResource = mysql_query($sql,$db->dbConn);

$numRows = mysql_num_rows($queryResource);
echo $numRows . ' rows selected<br />';

while ($row=mysql_fetch_array($queryResource,MYSQL_ASSOC)) {
    echo 'Title: '.$row['title'].'<br />';
    echo 'Author: '.$row['author'].'<br />';
    echo 'Body: '.$row['body'].'<br />';
}
?>