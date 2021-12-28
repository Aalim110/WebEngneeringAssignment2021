<?php
require_once('constants.php');

function getConnection()
{
    $dbh = new PDO("mysql:host=localhost;", "root", "");
    $dbh->exec("USE " . DB);

    return $dbh;
}
