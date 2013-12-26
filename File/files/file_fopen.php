<?php
// Variable to store the location of the file
$location = 'demo/writeSecureScripts.html';

// open the file handle for reading
$fp = fopen($location, 'r');

// read the complete file into a string
$file = fread($fp, filesize($location));

echo $file;

// close the file hanlde
fclose($fp);

?>

