<?php
    include ("php/funcionesEmpleado.php");
    include ("php/funcionesUsuario.php");
    include ("php/funcionesUE.php");
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
        usu <input type="text" name="c1" id="c1">
        emp <input type="text" name="c2" id="c2">

        <input type="submit" name="guardar"
                class="button" value="Guardar" /> 
        <input type="submit" name="borrar"
                class="button" value="Borrar" /> 
    </form>
    <table>
        <tr>
            <th>Usuairo</th>
            <th>Pass</th>
            <th>Tipo</th>
            <th>Depa</th>
            <th>Sede</th>
        </tr>
        <?php
            cargarTablaUsu();
        ?>
    </table>
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
    <table>
        <tr>
            <th>Usuario</th>
            <th>Empleado</th>
        </tr>
        <?php
            cargarTablaUE();
        ?>
    </table>
</body>
</html>