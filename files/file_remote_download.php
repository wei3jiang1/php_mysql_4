<?php
$fileName = 'sample.zip';
$mimeType = 'applicaiton/zip';

if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 5') or 
    strpos($_SERVER['HTTP_USER_AGENT'], 'Opera 7') ) {
    $mimeType = 'application/x-download';
}

header('content-disposition: attachment; filename=' . $fileName);
header('content-type: ' . $mimeType);
header('content-length: ' . filesize($filename));

readfile($fileName);
?>