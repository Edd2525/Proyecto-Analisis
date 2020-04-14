<?php
    include ("php/funcionesUsuario.php");
    if(array_key_exists('guardar', $_POST)) { 
        insertarUsu($_POST['c1'],$_POST['c2'],$_POST['c3'],$_POST['c4'],$_POST['c5']); 
    } 
    if(array_key_exists('modificar', $_POST)) { 
        updateUsu($_POST['c1'],$_POST['c2'],$_POST['c3'],$_POST['c4'],$_POST['c5']); 
    }
    if(array_key_exists('borrar', $_POST)) { 
        deleteUsu($_POST['c1']); 
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
        user <input type="text" name="c1" id="c1">
        pass <input type="text" name="c2" id="c2">
        tipo <input type="text" name="c3" id="c3">
        depa <input type="text" name="c4" id="c4">
        sede <input type="text" name="c5" id="c5">
        <input type="submit" name="guardar"
                class="button" value="Guardar" /> 
        <input type="submit" name="modificar"
                class="button" value="Modificar" /> 
        <input type="submit" name="borrar"
                class="button" value="Borrar" /> 
    </form>
    <table>
        <tr>
            <th>Usairo</th>
            <th>Pass</th>
            <th>Tipo</th>
            <th>Depa</th>
            <th>Sede</th>
        </tr>
        <?php
            cargarTablaUsu();
        ?>
    </table>
</body>
</html>
<?php
    
?>