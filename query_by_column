<?php
$sql = "SELECT * FROM articles";

if (!isset($_GET['order']))
    $_GET['order'] = FALSE;
    
switch ($_GET['order']) {
    case 'author':
        $sql .= " ORDER BY author";
        break;
    default:
        $sql .= " ORDER BY title";
        break;
        }
        
if (!$queryResource = mysql_query($sql, $dbConn)) {
    

?>