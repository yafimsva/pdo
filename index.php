<?php

//Connect to DB
require '/home/yvainilo/config.php';
try {
    //Instantiate a database object
    $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
    echo 'Connectedtodatabase!';
} catch (PDOException$e) {
    echo $e->getMessage();
}





