<?php require_once 'dbConfig.php' ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <?php
    $query = "INSERT INTO courts (Court_ID , Court_Name,Court_type, Status) 
    VALUES (?,?,?,?)"; // Inserting into a table name "courts" 

    $stmt = $pdo->prepare($query); // Connecting to a PDO because the database is accessed via PDO

    $executeQuery = $stmt->execute(
       [51 ,"LOL","POWER",0] // inserting value to each row Court_id = 51 courtname = lol court_type = power and last the status 0 because it is not available 
    );

        if ($executeQuery){ //This condition help me to determine if the inserting is successfull or not
        echo "The insertion is successful";
        }else{
        echo "Query failed";
        }
?>
