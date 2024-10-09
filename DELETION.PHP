<?php require_once 'dbConfig.php' ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <?php
    $query = "DELETE FROM courts WHERE Court_ID = 51"; // Deleting on the table courts where id = 51

    $stmt = $pdo->prepare($query); // Connecting to a PDO because the database is accessed via PDO

    $executeQuery = $stmt->execute(
       [51 ,"LOL","POWER",0] // Executing the query 
    );

        if ($executeQuery){ //This condition help me to determine if the inserting is successfull or not
        echo "The insertion is successful";
        }else{
        echo "Query failed";
        }
?>

</body>
</html>