<?php
set_time_limit(0);

require_once 'NET/FTP.php';

$ftpServer = '316.b81.myftpupload.com';
$ftpUser = 'a3161079';
$ftpPass = 'Wartisan@2';

$localDir = 'demo/';
$remoteDir = '/users/';

$ftp = new Net_FTP();

$ftp->setHostname($ftpServer);
$ftp->setUsername($ftpUser);
$ftp->setPassword($ftpPass);

$ftp->connect();
$ftp->login();

//$ftp->getExtensionsFile('extensions.ini');

if ($ftp->getRecursive($remoteDir, $localDir)) {
    echo 'Files transfered successfully';
} else {
    echo 'Transfer failed';
}


?>