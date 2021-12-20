<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-4</title>
    <?php
    for ($i = 0; $i < 15; $i++) {
        $numbers = rand(1, 100);
        echo "<h1>$numbers</h1>";
    }
    ?>
</head>
<body>
  
</body>
<style>
    h1 {
        text-align: center;
    }
</style>
</html>