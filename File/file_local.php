<?php
// Function to convert a size to bytes to large units
function fileSizeUnit($size) {
    if ($size >= 1073741824) {
        $size = number_format(($size / 1073741824), 2);
        $unit = 'GB';
    } else if ($size >= 1048576) {
        $size = number_format(($size / 1048576), 2);
        $unit = 'MB';
    } else if ($size >= 1024) {
        $size = number_format(($size / 1024), 2);
        $unit = 'KB';
    } else if ($size >= 0) {
        $unit = 'B';
    } else {
        $size = '0';
        $unit = 'B';
    }
    return array('size' => $size, 'unit' => $unit);
}

$file = 'demo/writeSecureScripts2.html';

// Does the file exist
if (file_exists($file)) {
    echo 'Yep: ' . $file . ' exists.<br />';
} else {
    die('Where has: ' . $file . ' gone!<br />');
}
    
// Use a more convenient file size
$size = fileSizeUnit(filesize($file));

// Display the result
echo 'It\'s ' . $size['size'] . ' ' . $size['unit'] . ' in size.<br />';
?>