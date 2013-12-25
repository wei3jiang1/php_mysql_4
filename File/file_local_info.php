<?php
$file = 'demo/writeSecureScripts2.html';

// Is it a file? Could be is_dir() for directory
if (is_file($file)) {
    echo 'Yep: ' . $file . ' is a file<br />';
}

// Is it readable?
if (is_readable($file)) {
    echo $file . ' can be read<br />';
}

// Is it writable?
if (is_writable($file)) {
    echo $file . ' can be written to<br />';
}

// What was it last modified?
$modified = date ("D d M g:i:s", filemtime($file));
echo $file . ' last modified at '. $modified . '<br />';

// When was it last accessed?
$accessed = date("D d M g:i:s", fileatime($file));
echo $file . ' last accessed at ' . $accessed . '<br />';
?>