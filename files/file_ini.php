<?php
$iniVars = parse_ini_file('demo/example.ini', TRUE);

echo '<pre>';
print_r($iniVars);
echo '</pre>';
?>