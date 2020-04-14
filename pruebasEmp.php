<?php
    include ("php/funcionesEmpleado.php");
    if(array_key_exists('guardar', $_POST)) { 
        insertarEmp($_POST['c1'],$_POST['c2'],$_POST['c3'],$_POST['c4']); 
    } 
    if(array_key_exists('modificar', $_POST)) { 
        updateEmp($_POST['c1'],$_POST['c2'],$_POST['c3'],$_POST['c4']); 
    }
    if(array_key_exists('borrar', $_POST)) { 
        deleteEmp($_POST['c1']); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        id <input type="text" name="c1" id="c1">
        nom <input type="text" name="c2" id="c2">
        ape <input type="text" name="c3" id="c3">
        hora <input type="text" name="c4" id="c4">
        <input type="submit" name="guardar"
                class="button" value="Guardar" /> 
        <input type="submit" name="modificar"
                class="button" value="Modificar" /> 
        <input type="submit" name="borrar"
                class="button" value="Borrar" /> 
    </form>
    <table>
        <tr>
            <th>ID</th>
            <th>NOM</th>
            <th>APE</th>
            <th>HORA</th>
        </tr>
        <?php
            cargarTablaEmp();
        ?>
    </table>
</body>
</html>