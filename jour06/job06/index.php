<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <select name="style" id="formu">
            <option value="style1">style1</option>
            <option value="style2">style2</option>
            <option value="style3">style3</option>
        </select>
        <button type="submit">envoyer</buttom>
    </form>
<?php


        
        if(isset($_POST['style']) && $_POST['style'] == 'style1'){
            ?><link rel="stylesheet" href=./style1.css><?php
        };

        if(isset($_POST['style']) && $_POST['style'] == 'style2'){
            ?><link rel="stylesheet" href=./style2.css><?php
        };

        if(isset($_POST['style']) && $_POST['style'] == 'style3'){
            ?><link rel="stylesheet" href=./style3.css><?php
        };


?>
</body>
</html>