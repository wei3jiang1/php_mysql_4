<?php
// Fetch a file into an array
$lines = file('demo/writeSecureScripts.html');

// open file for writing (create if doesn't exist)
$fp = fopen('demo/writeSecureScripts.txt','w');

// Loop through lines of original
foreach ($lines as $line) {
    // strip out HTML
    $line = strip_tags($line);
    // write the line
    fwrite($fp,$line);
}

// Display the new file
echo '<pre>';
echo file_get_contents('demo/writeSecureScripts.txt');
echo '</pre>';
?>

