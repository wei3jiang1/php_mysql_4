<?php
// Open the current directory
$location = './';

// Open current directory
$dp = opendir($location);

// Loop through the directory
while ($entry = readdir($dp)) {
    // if $entry is a directory...
    if (is_dir($location . $entry)) {
        echo '[Dir] ' . $entry . '<br />';
    } else if (is_file($location . $entry)) { // if $entry is a file...
                echo '[File] ' . $entry . '<br />';
    }
}
        
// Close it again
closedir($dp);
?>