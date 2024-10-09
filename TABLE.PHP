<?php require_once 'dbConfig.php' ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<STYLE>
    table, th, td {
border: 1px solid black;
}
</STYLE>
    <?php
    $query = "SELECT
            Payment_ID,
            Amount 
            FROM payment
            ORDER BY Amount DESC";
    $stmt = $pdo->prepare($query);

    $executeQuery = $stmt->execute(); 

    if ($executeQuery){
        $executeQuery = $stmt->fetchALL();
    } else{
        echo "Query Failed";
    }
?>
<TABle>
    <TR>
        <TH>Payment_ID</TH>
        <th>Highest TO LOWEST</th>
    </TR>
    <?php foreach ($executeQuery as $row) {?>
    <tr>
        <td><?php echo $row['Payment_ID'];?></td>
        <td><?php echo $row['Amount'];?></td>
    </tr>

   <?php } ?>
</TABle>
</body>
</html>