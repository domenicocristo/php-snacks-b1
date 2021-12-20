<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>
    <?php
    $partita1 = [
        $squadraCasa1 = [
            "punti" => "20"
        ],
        $squadraOspite1 = [
            "punti" => "10"
        ]
    ];
    $partita2 = [
        $squadraCasa2 = [
            "punti" => "30"
        ],
        $squadraOspite2 = [
            "punti" => "20"
        ]  
    ];
    ?>
</head>
<body>
    <div>
        <h1>Partita 1</h1>

        <h3>Squadra casa</h3>
        <div>
            <?php
            echo "punti=" . $squadraCasa1["punti"];
            ?>
        </div>

        <h3>Squadra ospite</h3>
        <div>
            <?php
            echo "punti=" . $squadraOspite1["punti"];
            ?>
        </div>
    </div>

    <div>
        <h1>Partita 2</h1>

        <h3>Squadra casa</h3>
        <div>
            <?php
            echo "punti=" . $squadraCasa2["punti"];
            ?>
        </div>

        <h3>Squadra ospite</h3>
        <div>
            <?php
            echo "punti=" . $squadraOspite2["punti"];
            ?>
        </div>
    </div>
</body>
</html>