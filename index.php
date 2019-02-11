<?php

//Connect to DB

try {
    //Instantiate a database object
    $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
    echo 'Connectedtodatabase!';
} catch (PDOException$e) {
    echo $e->getMessage();
}





