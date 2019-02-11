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


//INSERT QUERY


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
$id = $dbh->lastInsertId();
echo "<p>Pet $id inserted successfully.</p>";

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

//Bind the parameters
$type = 'lion';
$name = 'king';
$color = 'yellow';
$statement->bindParam(':type', $type, PDO::PARAM_STR);
$statement->bindParam(':name', $name, PDO::PARAM_STR);
$statement->bindParam(':color', $color, PDO::PARAM_STR);

//Execute
$statement->execute();
$id = $dbh->lastInsertId();
echo "<p>Pet $id inserted successfully.</p>";


//Bind the parameters
$type = 'cat';
$name = 'kotik';
$color = 'white';
$statement->bindParam(':type', $type, PDO::PARAM_STR);
$statement->bindParam(':name', $name, PDO::PARAM_STR);
$statement->bindParam(':color', $color, PDO::PARAM_STR);

//Execute
$statement->execute();
$id = $dbh->lastInsertId();
echo "<p>Pet $id inserted successfully.</p>";


//UPDATE QUERY


//Define the query
$sql = "UPDATE pets SET name = :new WHERE name = :old";

//Prepare the statement
$statement = $dbh->prepare($sql);

//Bind the parameters
$old = 'Joey';
$new = 'Troy';
$statement->bindParam(':old', $old, PDO::PARAM_STR);
$statement->bindParam(':new', $new, PDO::PARAM_STR);

//Execute
$statement->execute();


//UPDATE QUERY


//Define the query
$sql = "UPDATE pets SET name = :new WHERE name = :old";

//Prepare the statement
$statement = $dbh->prepare($sql);

//Bind the parameters
$old = 'kotik';
$new = 'Leo';
$statement->bindParam(':old', $old, PDO::PARAM_STR);
$statement->bindParam(':new', $new, PDO::PARAM_STR);

//Execute
$statement->execute();


//UPDATE QUERY


//Define the query
$sql = "UPDATE pets SET color = :new WHERE color = :old";

//Prepare the statement
$statement = $dbh->prepare($sql);

//Bind the parameters
$old = 'pink';
$new = 'brown';
$statement->bindParam(':old', $old, PDO::PARAM_STR);
$statement->bindParam(':new', $new, PDO::PARAM_STR);

//Execute
$statement->execute();


//DELETE QUERY


//Define the query
$sql = "DELETE FROM pets WHERE id = :id";

//Prepare the statement
$statement = $dbh->prepare($sql);

//Bind the parameters
$id = 1;
$statement->bindParam(':id', $id, PDO::PARAM_INT);

//Execute
$statement->execute();


//SELECT QUERY


//Define the query
$sql = "SELECT * FROM pets WHERE id = :id";

//Prepare the statement
$statement = $dbh->prepare($sql);

//Bind the parameters
$id = 3;
$statement->bindParam(':id', $id, PDO::PARAM_INT);

//Execute the statement
$statement->execute();

//Process the result
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo $row['name'] . ", " . $row['type'] . ", " . $row['color'];
