<?php
$host = 'www.wartisan.com';
$port = '80';
$timeout = '10';
$uri = '/users/requestor.html';

if (!$fp = fsockopen($host, $port, $errNo, $errMsg, $timeout)) {
    die('Error connecting: ' . $errNo . ' - ' . $errMsg);
}

$requestHeader = "GET " . $uri . " HTTP/1.1\r\n";
$requestHeader .= "Host: " . $host . "\r\n\r\n";

fputs($fp, $requestHeader);

while(!feof($fp)) {
    $chunk = fgets($fp);
    echo $chunk;
}

fclose($fp);
?>