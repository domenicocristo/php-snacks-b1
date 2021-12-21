<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-4</title>
    <?php
    $array = [];

    while (count($array) < 15) {
        $numbers = rand(1, 100);
        if (!in_array($numbers, $array)) {
            $array []= $numbers;
        };
       
    }
    ?>
</head>
<body>
  <h1>
    <?php
    print_r($array)
    ?>
  </h1>
</body>
</html>