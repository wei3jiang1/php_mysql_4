<?php
$fp = fopen('http://www.wartisan.com/users/requestor.html', 'r');

while(!feof($fp)) {
    $chunk = fgets($fp);
    echo $chunk;
}

fclose($fp);
?>