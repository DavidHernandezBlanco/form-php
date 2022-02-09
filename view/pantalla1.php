<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Pantalla1</title>
</head>

<body>
    <?php
    session_start();
    if (!($_SESSION['pantalla1']=='check')) {
        header("Location: ../index.php");
    }
    ?>
    <h1>Mostrar datos del formulario</h1>
    <form action="../proc/res.proc.php" method="post">
        <input type="text" name="pokemon2" placeholder="Inserte segundo Pokemon...">
        <input type="submit" name="pantalla1">
    </form>
    <?php
    if (isset($_GET['msg1'])) {
        echo '<p id="msg">Intenta con el Pokemon #'.$_GET['msg'].'</p>';
    }
    ?>
</body>

</html>