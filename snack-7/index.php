<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-7</title>
    <?php
    $school = [
        "Mario Rossi" => [6, 7, 8, 9, 10, 9],
        "Francesca Bianchi" => [6, 7, 8, 9, 10, 9, 8]
    ]
    ?>
</head>
<body>
    <p>
        <?php
        foreach ($school as $name => $scores) {
            $avg = 0;
            foreach ($scores as $score) {
                $avg += $score;
            }

            $avg /= count($scores);

            echo $name . ": " . round($avg, 2) . "<br>";
        }
        ?>
    </p>
</body>
</html>