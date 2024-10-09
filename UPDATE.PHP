<?php require_once 'dbConfig.php' ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <?php
    $query = "UPDATE  courts 
    SET Court_name = ?, Court_type = ?
    WHERE Court_ID = 24"; // Updating  on the table courts where id = 24

    $stmt = $pdo->prepare($query); // Connecting to a PDO because the database is accessed via PDO

    $executeQuery = $stmt->execute(
        ["POP","COKE"]
    ); // Executing the query  and the court_name to popo and court type to

        if ($executeQuery){ //This condition help me to determine if the updating   is successfull or not 
        echo "Updating is successfull";
        }else{
        echo "Updating failed failed";
        }
?>

</body>
</html>