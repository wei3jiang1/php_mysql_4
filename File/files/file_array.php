<?php
// Read file into an array
$file = file('demo/writeSecureScripts.html');

// Count the number of lines
$lines = count($file);

// Initialize $alt
$alt = '';

// Loop through the lines in the file
for ($i=0; $i<$lines; $i++) {
    // Creates alternating background color
    if ($alt == '#f5f6f6') {
        $alt = '#ffffff';
    } else {
        $alt = '#f5f6f6';
    }
    
    // Display the line inside a div tag
    echo '<div style="font-family: verdana;
                      font-size: 12px;
                      background-color: ' .$alt. ';">';
    // Use htmlsepcialchars to see the raw HTML
    echo $i . ':' . htmlspecialchars($file[$i]);
    echo "</div>\n";
}
?>