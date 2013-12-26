<?php
// Include PEAR:File
require_once 'File.php';

// Fetch a file into an array
$htmlVersion = File::readAll('demo/writeSecureScripts.html');

// Strip out HTML
$txtVersion = strip_tags($htmlVersion);

// Write to file and lock while writing
File::write('demo/writeSecureScripts2.txt', $txtVersion, FILE_MODE_WRITE, LOCK_EX);

// Now unlock the file
File::unlock('demo/writeSecureScripts2.txt', FILE_MODE_WRITE);

// Display the new file
echo '<pre>';
echo File::readAll('demo/writeSecureScripts2.txt');
echo '</pre>';
?>

