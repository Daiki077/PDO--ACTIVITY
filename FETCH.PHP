<?php require_once 'dbConfig.php' ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
$stmt = $pdo->prepare(query:'SELECT  * FROM customer'); //selecting all the customer table
if ( $stmt->execute() ) { // Executing the sql query and checking if there is the error
    echo "<pre>"; // Using pre is to display preformatted text
    print_r( $stmt->fetch() ); // fetching  the first row of the table 
    echo "<pre>"; 
}
?>

</body>
</html>