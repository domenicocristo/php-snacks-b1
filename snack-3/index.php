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
    <p>
        <?php
        $dates = array_keys($posts);
        for ($x = 0; $x < count($dates); $x++) {
            $date = $dates[$x];
            echo "<h1>" . $date . "<h1/>";

            $subPosts = $posts[$date];
            for ($y = 0; $y < count($subPosts); $y++) {
                $post = $subPosts[$y];
                echo "<h4>" . $post["title"] . "<h4/>"
                . $post["text"] . "<br>"
                . $post["author"] . "<br>";

            }
        }
        ?>
    </p>
</body>
</html>