<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-2</title>
    <?php
    $name = $_GET["name"];

    $mail = $_GET["mail"];

    $age = $_GET["age"];

    $verifyName = strlen($name);

    $verifyMail = strpos($mail, "@" . ".");

    $verifyAge = is_numeric($age);
    ?>
</head>
<body>
    <div>
        <?php
        if ($verifyName >= 3 && $verifyMail == true && $verifyAge == true)
            echo "Accesso riuscito";
        else {
            echo "Accesso negato";
        }
        ?>
    </div>
</body>
</html>