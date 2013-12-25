<?php
// Variable to store the location of the file
$location = 'demo/writeSecureScripts.html';

// open the file handle for reading
$fp = fopen($location, 'r');

// Loop until the end of the file
while (!feof($fp)) {
    // get a chunk to the next linefeed
    $chunk = fgets($fp);
    echo $chunk;
}


// close the file hanlde
fclose($fp);

?>

