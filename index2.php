<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .square{
            width: 200px;
            height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .bg-gray{
            background-color: gray;
        }
        .bg-green{
            background-color: green;
        }

    </style>
</head>
<body>

<?php

    ## Snack 2
    // Passare come parametri GET name, mail e age e verificare 
    // (cercando i metodi che non conosciamo nella documentazione)
    // che name sia più lungo di 3 caratteri, che mail contenga un 
    // punto e una chiocciola e che age sia un numero. Se tutto è 
    // ok stampare "Accesso riuscito", altrimenti "Accesso negato"

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    $nameLength = strlen($name);
    $hasDot = strpos($mail, '.');
    $hasAt = strpos($mail, '@');
    $isAgeNum = is_numeric($age);

    if ($nameLength < 3 || 
        $hasDot === false || 
        $hasAt === false || 
        $isAgeNum === false){

        echo 'Accesso negato';
    }else{

        echo 'Accesso riuscito';
    };
?>

</body>
</html>