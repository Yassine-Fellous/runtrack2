<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$mysqli = new mysqli("localhost","root","","jour08");
$cont=mysqli_query($mysqli,"SELECT * FROM salles ORDER BY capacite ASC");
?>

    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>id_etage</th>
                <th>capacite</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($row = mysqli_fetch_array($cont)) {
                    echo "<tr><td>$row[id]</td>";
                    echo "<td>$row[nom]</td>";
                    echo "<td>$row[id_etage]</td>";
                    echo "<td>$row[capacite]</td></tr>";
                }
            ?>
        </tbody>
</body>