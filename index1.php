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

    // Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. 
    // Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra 
    // di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite 
    // con questo schema -> Olimpia Milano - Cantù | 55-60

    $arr = [
        [
            'home' => [
                'name' => 'Kinder Bologna',
                'points' => '80'
            ],
            'guest' => [
                'name' => 'Scavolini Pesaro',
                'points' => '83'
            ]
        ],
        [
            'home' => [
                'name' => 'Benetton Treviso',
                'points' => '68'
            ],
            'guest' => [
                'name' => 'Snaidero Udine',
                'points' => '76'
            ]
        ],
        [
            'home' => [
                'name' => 'Pompea Roma',
                'points' => '91'
            ],
            'guest' => [
                'name' => 'MontePaschi Siena',
                'points' => '79'
            ]
        ],
        [
            'home' => [
                'name' => 'Skipper Bologna',
                'points' => '64'
            ],
            'guest' => [
                'name' => 'Air Avellino',
                'points' => '65'
            ]
        ],
        [
            'home' => [
                'name' => 'Pepsi Rimini',
                'points' => '64'
            ],
            'guest' => [
                'name' => 'Adecco Milano',
                'points' => '82'
            ]
        ],
    ];

    for ($x=0; $x<count($arr); $x++){

        $homeTeam = $arr[$x]['home']['name'];
        $homePoints = $arr[$x]['home']['points'];

        $guestTeam = $arr[$x]['guest']['name'];
        $guestPoints = $arr[$x]['guest']['points'];

        echo '<div>' . $homeTeam . ' - ' . $guestTeam . ' | ' . $homePoints . '-' . $guestPoints . '</div>';
    }


?>

</body>
</html>