<?php
//echo $_POST['pokemon'];
if (isset($_POST ['index']) && strtolower($_POST['pokemon'])=='pikachu') {
    header('Location: ../view/pantalla1.php');
} else if(isset($POST['index']) && strtolower($_POST['pokemon'])=='pikachu') {
    header('Location: ../index.php?msg=25');
} 
else if (isset($_POST['pantalla1']) && strtolower($_POST['pokemon'])=='charmander') {
    header('Location: ../view/pantalla2.php');
} else if (isset($_POST['pantalla1'])){
    header('Location: ../view/pantalla1.php?msg=04');
}

else if (strtolower($_POST['pokemon'])=='charmander') {
    header('Location: ../view/pantalla2.php');
} else {
    header('Location: ../index.php?msg=25');
}
?>