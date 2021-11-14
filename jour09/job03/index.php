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
$cont=mysqli_query($mysqli,"SELECT prenom, nom, naissance FROM etudiants WHERE sexe LIKE '%femme%'");
?>


    <table border="1">
        <thead>
            <tr>

                <th>prenom</th>
                <th>nom</th>
                <th>naissance</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($row = mysqli_fetch_array($cont)) {
                    echo "<td>$row[prenom]</td>";
                    echo "<td>$row[nom]</td>";
                    echo "<td>$row[naissance]</td>";
                }
            ?>
        </tbody>
</body>
</html>
