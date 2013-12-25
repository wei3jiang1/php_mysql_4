<?php
// Deine an array of allowed files - VERY IMPORTANT!
$allowed = array('file_dir.php', 'file_dir2.php', 'file_local.php');

// If it's an allowed file, display it
if (isset($_GET['view']) && in_array($_GET['view'], $allowed)) {
    echo ($_GET['view']);
    echo '<br />';
    highlight_files($_GET['view']);
} else {
    // Specify current directory
    $location = './';
    $dir = dir($location);
    
    while ($entry = $dir->read()) {
        if (in_array($entry,$allowed)) {
            echo '<a href="' . $_SERVER['PHP_SELF'] . '?view=' . $entry . '">' . $entry . "</a><br />\n";
        }
    }
    
    $dir->close();
}
?>