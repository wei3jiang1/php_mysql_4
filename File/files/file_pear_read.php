<?php
// Include PEAR:File
require_once 'File.php';

// Read the entire file and display, using a shared read lock
echo File::readAll('demo/writeSecureScripts.html',FILE_LOCK_SHARED);
echo "bye";
?>

