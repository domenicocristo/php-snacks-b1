<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-5</title>
    <?php
    $paragrafo = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam maxime quasi natus recusandae autem officiis. Esse quae voluptatem tempore laudantium pariatur. Quia temporibus placeat corrupti, ipsa adipisci sunt aliquam beatae.";
    $arrayParagrafo =  explode(".", $paragrafo)
    ?>
</head>
<body>
    <p>
        <?php
        foreach ($arrayParagrafo as $paragrafo) {
            if (strlen($paragrafo) > 0) {
                echo "<p>" . $paragrafo . "." . "<p/>";
            }
        }
        ?>
    </p>
</body>
</html>