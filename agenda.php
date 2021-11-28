<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>

<body>
    <?php
    session_start();

    if (!isset($_SESSION['agenda'])) {
        $_SESSION['agenda'] = array();
    }
    if (isset($_GET['submit'])) {
        $nombre = $_GET['nombre'];
        $telefono = $_GET['telefono'];
        if (empty($nombre) or empty($telefono))
            echo ('Rellena el formulario');
        else {
            $_SESSION['agenda'][$nombre] = $telefono;
        }
    }
    ?>
    <h2>Nuevo contacto</h2>
    <form action="" method="get">
        <div style="align-items: left">
            <label>Nombre:<input type="text" name="nombre" /></label><br />
            <label>Teléfono:<input type="number" name="telefono" /></label><br />
            <input type="submit" name='submit' value="Ejecutar" /><br />
        </div>
    </form>
    <?php
    $agenda = $_SESSION['agenda'];
    if (!empty($agenda)) {
        echo "<ul>";
        foreach ($agenda as $nombre => $telefono)
            echo "<li>" . $nombre . ': ' . $telefono . "</li>";
        echo "</ul>";
    }
    else{
        echo('Agenda vacia');
    }

    ?>
</body>

</html>