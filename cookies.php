<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>
    <?php
    if (isset($_COOKIE["contador"])) {
        echo "Contador: " . $_COOKIE["contador"];
        $contador = ++$_COOKIE["contador"];
        setcookie('contador', $contador);
    } else {
        echo "Aun no has recargado";
        setcookie("contador", 1, time() + 2 * 24 * 60 * 60);
    }
    ?>
</body>

</html>