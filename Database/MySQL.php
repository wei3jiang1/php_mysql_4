<?php
/**
  * MySQL databse connection class
  * @access public
  * @package SPLIB
*/



class MySQLResult {
    var $mysql;
    var $query;
    
    function MySQLResult(&$mysql, $query) {
        $this->mysql = &$mysql;
        $this->query = $query;
    }
    
    function fetch() {
        if ($row = mysql_fetch_array($this->query, MYSQL_ASSOC)) {
            //echo '$row=' . count($row);
            return $row;
        } else if ($this->size() > 0) {
            msyql_data_seek($this->query,0);
            return false;
        } else {
            return false;
        }
    }
    
    function isError() {
        return $this->mysql->iSError();
    }
}


class MySQL {
    var $host;
    var $dbUser;
    var $dbPass;
    var $dbName;
    var $dbConn;
    var $connectError;

function MySQL($host, $dbUser, $dbPass, $dbName) {
    $this->host = $host;
    $this->dbUser = $dbUser;
    $this->dbPass = $dbPass;
    $this->dbName = $dbName;
    $this->connectToDb();
}

function connectToDb() {
    if (!$this->dbConn = @mysql_connect($this->host, $this->dbUser, $this->dbPass)) {
        trigger_error('Could not connect to server');
        $this->connectError = true;
    } else if (!@mysql_select_db($this->dbName,$this->dbConn)) {
        trigger_error('Could not select database');
        $this->connectError = true;
    }
}

function isError() {
    if($this->connectError) {
        return true;
    }
    $error = mysql_error($this->dbConn);
    if (empty($error)) {
        return false;
    } else {
        return true;
    }
}
    
function query($sql) {
    if(!$queryResource = mysql_query($sql,$this->dbConn)) {
        trigger_error('Query failed: ' . mysql_error($this->dbConn) . ' SQL: ' . $sql);
    }
    return new MySQLResult($this, $queryResource);
}
    
}
?>