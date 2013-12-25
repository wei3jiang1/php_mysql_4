<?php
require_once 'Archive/Tar.php';

$tar = new Archive_Tar('demo/demo.tar.gz');

$tar->extract('extract');

echo 'Archive extracted';

?>