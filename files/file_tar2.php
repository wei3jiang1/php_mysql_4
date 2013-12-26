<?php
require_once '../Database/MySQL.php';
require_once 'Archive/Tar.php';

$host = 'localhost';
$dbUser = 'wei';
$dbPass = 'wei';
$dbName = 'sitepoint';

$db = &new MySQL($host, $dbUser, $dbPass, $dbName);

$tar = new Archive_Tar('demo/articles.tar.gz', 'gz');

$sql = "SELECT * FROM articles";

$result = $db->query($sql);

while ($row = $result->fetch()) {
    $tar->addString('articles/' . $row['article_id'] . '.txt', $row['body']);
}

echo 'Article archive created';
?>