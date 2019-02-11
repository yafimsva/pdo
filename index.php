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


//Define the query
$sql = "INSERT INTO pets(type, name, color) VALUES (:type, :name, :color)";

//Prepare the statement
$statement = $dbh->prepare($sql);

//Bind the parameters
$type = 'kangaroo';
$name = 'Joey';
$color = 'purple';
$statement->bindParam(':type', $type, PDO::PARAM_STR);
$statement->bindParam(':name', $name, PDO::PARAM_STR);
$statement->bindParam(':color', $color, PDO::PARAM_STR);

//Execute
$statement->execute();

//Bind the parameters
$type = 'snake';
$name = 'Slitherin';
$color = 'green';
$statement->bindParam(':type', $type, PDO::PARAM_STR);
$statement->bindParam(':name', $name, PDO::PARAM_STR);
$statement->bindParam(':color', $color, PDO::PARAM_STR);

//Execute
$statement->execute();
$id = $dbh->lastInsertId();
echo "<p>Pet $id inserted successfully.</p>";

