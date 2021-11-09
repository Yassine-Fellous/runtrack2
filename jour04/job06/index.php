<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>

    <form action="#" method="POST">
        nombre:   <input type="number" name="number" required><br>
        <input type="submit" name="submit" value="Send!"></br>
    </form>

    <?php

    if(isset($_POST['submit'])){
        if($_POST['number']%2 == 0){
            echo 'le nombre est pair';
        }
        else {
            echo 'le nombre est impair';
        }
    }

    ?>




</body>
</html>