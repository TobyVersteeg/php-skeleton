<?php

/**
 * Connecting to a database
 * @param $dbHost, a host like 'localhost'
 * @param $dbName, the name of the database you wish to connect to
 * @param $dbUser, the username to connect with the database
 * @param $dbPass, the password to connect with the database
 * 
 * If one of the params is empty then they will be retrieved from config file
 */
function mysqlConnect($dbHost = null, $dbName = null, $dbUser = null, $dbPass = null)
{
    if (empty($dbHost) || empty($dbName) || empty($dbUser) || empty($dbPass)) {
        require $_SERVER['DOCUMENT_ROOT'] . '/config.php';

        $dbHost = $conf_db_host;
        $dbName = $conf_db_name;
        $dbUser = $conf_db_user;
        $dbPass = $conf_db_pass;
    }
    
    try {
        $dbh = new PDO('mysql:host=' . $dbHost . ';dbname=' . $dbName, $dbUser, $dbPass);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    return $dbh;
}

/**
 * Execture a PDO query
 * @param $query (required), the query to execute
 * @param $dbHost, a host like 'localhost'
 * @param $dbName, the name of the database you wish to connect to
 * @param $dbUser, the username to connect with the database
 * @param $dbPass, the password to connect with the database
 */
function mysqlQuery($query, $dbHost = null, $dbName = null, $dbUser = null, $dbPass = null)
{
    $dbh = mysqlConnect($dbHost = null, $dbName = null, $dbUser = null, $dbPass = null);

    $stmt = $dbh->prepare($query);
    $stmt->execute();

    return $stmt;
}

?>