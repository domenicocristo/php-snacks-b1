<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-3</title>
    <?php
    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];
    ?>
</head>
<body>
    <div>
        <h1>10/01/2019</h1>
        <h3>
            <?php
            print_r($posts["10/01/2019"]);
            ?>
        </h3>
    </div>

    <div>
        <h1>10/02/2019</h1>
        <h3>
            <?php
            print_r($posts["10/02/2019"]);
            ?>
        </h3>
    </div>

    <div>
        <h1>10/05/2019</h1>
        <h3>
            <?php
            print_r($posts["15/05/2019"]);
            ?>
        </h3>
    </div>
</body>
</html>