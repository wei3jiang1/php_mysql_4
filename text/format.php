<?php

$fruit = array('banana', 'mango', 'pear');
$price = array('30', '50', '35');

$format = "A %1\$s costs %2\$d cents.<br />\n";

for ($i = 0; $i < 3; $i++) {
    printf($format, $fruit[$i], $price[$i]);
}

?>