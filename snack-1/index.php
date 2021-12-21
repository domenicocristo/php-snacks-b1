<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>
    <?php
    $partite = [
       [
           "squadraCasa" => "team1",
           "squadraOspite" => "team2",
           "puntiCasa" => 20,
           "puntiOspite" => 10
       ],
       [
            "squadraCasa" => "team3",
            "squadraOspite" => "team4",
            "puntiCasa" => 30,
            "puntiOspite" => 20
        ],
        [
            "squadraCasa" => "team5",
            "squadraOspite" => "team6",
            "puntiCasa" => 40,
            "puntiOspite" => 30
        ]
    ];
    ?>
</head>
<body>
    <p>
        <?php
        for ($i = 0; $i < count($partite); $i++) {
            $partita = $partite[$i];

            echo $partita["squadraCasa"] . " - " . $partita["squadraOspite"]
            . " | " . $partita["puntiCasa"] . " - " . $partita["puntiOspite"] . "<br>";
        }
        ?>
    </p>
</body>
</html>