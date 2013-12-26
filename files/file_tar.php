<?php
require_once 'Archive/Tar.php';

$tar = new Archive_Tar('demo/demo.tar.gz', 'gz');

$files = array('demo/example.ini',
               'demo/writeSecureScripts2.html');

$tar->create($files);

echo 'Archive created';

?>