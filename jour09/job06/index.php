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
$cont=mysqli_query($mysqli,"SELECT * FROM etudiants");
$nb_etudiants = mysqli_num_rows($cont)
?>


    <table border="1">
        <thead>
            <tr>
            <th>nb_etudiants = <?php
                echo $nb_etudiants;
                ?> </th>
            </tr>
            <tr>
                <th>id</th>
                <th>prenom</th>
                <th>nom</th>
                <th>naissance</th>
                <th>sexe</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($row = mysqli_fetch_array($cont)) {
                    echo "<tr><td>$row[id]</td>";
                    echo "<td>$row[prenom]</td>";
                    echo "<td>$row[nom]</td>";
                    echo "<td>$row[sexe]</td>";
                    echo "<td>$row[naissance]</td>";
                    echo "<td>$row[email]</td></tr>";
                }
            ?>
        </tbody>
</body>
</html>