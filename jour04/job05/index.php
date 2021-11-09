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
        username:   <input type="text" name="username" required><br>
        password:   <input type="text" name="password" required><br>
        <input type="submit" name="submit" value="Send!"></br>
    </form>

    <?php
    
    if(isset($_POST['submit'])){
        
        if($_POST['username']=="John" && $_POST['password']=="Rambo"){
            echo'C’est pas ma guerre';
        }
        else {
        echo 'Votre pire cauchemar';
        }
        
    }

    ?>
</body>
</html>