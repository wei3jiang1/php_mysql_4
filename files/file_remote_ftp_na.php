<?php
set_time_limit(0);

$ftpServer = '316.b81.myftpupload.com';
$targetDir = '/';

if (!$fp = ftp_connect($ftpServer, 21, 30)) {
    die('Connection failed');
}

if (!ftp_login($fp, 'a3161079', 'Wartisan@2')) {
    die('login failed');
}

if (!ftp_chdir($fp, $targetDir)) {
    die('Unable to change directory to: ' . $targetDir);
}

echo '<b>Current directory:</b> <code>' . ftp_pwd($fp) . '</code><br />';

echo '<b>Files available:</b><br />';

$files = ftp_nlist($fp, './');
//$files = ftp_pasv($fp, true);

if (is_array($files)) {
    echo 'there are more than 1 files';
    foreach ($files as $file) {
    echo $file . '<br />';
    }
} else {
    echo $files . '<br />';
}



?>