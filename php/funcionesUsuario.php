<?php
include ("datos.php");

function conecatarBase(){
    global $host, $usuario, $clave, $base;
    if ($conexion = new mysqli($host,$usuario,$clave,$base)){
        return $conexion;
    }else{
        return false;
    }
}


function tablaUsu($datos){
    while($fila = $datos->fetch_object()){
        echo "<tr>";
        echo "<td>";
        echo $fila->usu_user;
        echo "</td>";
        echo "<td>";
        echo $fila->usu_pass;
        echo "</td>";
        echo "<td>";
        echo $fila->usu_tipo;
        echo "</td>";
        echo "<td>";
        echo $fila->usu_depa;
        echo "</td>";
        echo "<td>";
        echo $fila->usu_sede;
        echo "</td>";
        echo "</tr>";
    }
}

function cargarTablaUsu(){
    if($conexion=conecatarBase()){
    //echo "Aquí haríamos el resto de operaciones...";
    $sql= "SELECT * FROM usuario";
    $datos = $conexion->query($sql);
    if (mysqli_num_rows($datos)>0){
        tablaUsu($datos);
    } else {
        echo "<p>No se encontraron datos</p>";
    }

    }else {
        echo "<p>Servicio interrumpido</p>";
    }
}

function insertarUsu($user,$pass,$tipo,$depa,$sede){
    if($conexion=conecatarBase()){
        //echo "Aquí haríamos el resto de operaciones...";
        $sql= "INSERT INTO usuario (usu_user, usu_pass, usu_tipo, usu_depa, usu_sede) 
        VALUES ('$user', '$pass', '$tipo','$depa','$sede')";
        if ($conexion->query($sql)===true){
            echo "<p>Se agrego correctamente</p>";
        } else {
            echo "<p>No se encontraron datos</p>";
        }
    }else {
        echo "<p>Servicio interrumpido</p>";
    }
}

function buscarUsu($user){
    if($conexion=conecatarBase()){
        $sql= "SELECT *  FROM usuario WHERE usu_user = '$user'";
        $datos = $conexion->query($sql);
        if (mysqli_num_rows($datos)>0){
            $fila = $datos->fetch_object();
            echo $fila->usu_user;
            //$_POST['c1']=$fila->campo1;

        } else {
            echo "<p>No se encontraron datos</p>";
        }
    }else {
        echo "<p>Servicio interrumpido</p>";
    }
}

function updateUsu($user,$pass,$tipo,$depa,$sede){
    if($conexion=conecatarBase()){
        $sql= "UPDATE usuario SET usu_pass = '$pass', usu_tipo = '$tipo'
        , usu_depa = '$depa', usu_sede = '$sede' WHERE usu_user = '$user'";
        $datos = $conexion->query($sql);
        if ($datos === true){
            echo "<p>Modificados</p>";

        } else {
            echo "<p>No se encontraron datos</p>";
        }
    }else {
        echo "<p>Servicio interrumpido</p>";
    }
}

function deleteUsu($user){
    if($conexion=conecatarBase()){
        $sql= "DELETE FROM usuario WHERE usu_user = '$user'";
        $datos = $conexion->query($sql);
        if ($datos === true){
            echo "<p>Borrados</p>";

        } else {
            echo "<p>No se encontraron datos</p>";
        }
    }else {
        echo "<p>Servicio interrumpido</p>";
    }
}

?>
