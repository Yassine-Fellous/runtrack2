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
$cont=mysqli_query($mysqli,"SELECT salles.nom, etage.nom FROM salles INNER JOIN ETAGE ON salles.id_etage = etage.id");
?>

    <table border="1">
        <thead>
            <tr>
                <th>salles</th>
                <th>etage</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($row = mysqli_fetch_array($cont)) {
                    echo "<tr><td>$row[0]</td>";
                    echo "<td>$row[1]</td></tr>";
                }
            ?>
        </tbody>
</body>