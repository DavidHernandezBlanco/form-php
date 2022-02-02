<?php
//echo $_POST['pokemon'];
if (strtolower($_POST['pokemon'])=='pikachu') {
    header('Location: ../view/pantalla1.php');
} else {
    header('Location: ../index.php?msg=25');
}

if (strtolower($_POST['pokemon2'])=='charmander') {
    header('Location: ../view/pantalla2.php');
} else {
    header('Location: ../index.php?msg1=04');
}

?>