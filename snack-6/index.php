<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-6</title>
    <?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
    ?>
</head>
<body>
    <div class="grigio">
        <?php
        $teachers = $db["teachers"];
        foreach ($teachers as $teacher) {
            echo $teacher["name"] . " " . $teacher["lastname"] . "<br>";
        }
        ?>
    </div>

    <div class="verde">
        <?php
        $pms = $db["pm"];
        foreach ($pms as $pm) {
            echo $pm["name"] . " " . $pm["lastname"] . "<br>";
        }
        ?>
    </div>
</body>
<style>
    * {
        text-align: center;
    }
    .grigio {
        background-color: grey;
    }

    .verde {
        background-color: green;
    }
</style>
</html>