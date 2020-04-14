<?php 
include ("datos.php");

function conecatarBaseUE(){
    global $host, $usuario, $clave, $base;
    if ($conexion = new mysqli($host,$usuario,$clave,$base)){
        return $conexion;
    }else{
        return false;
    }
}


function tablaUE($datos){
    while($fila = $datos->fetch_object()){
        echo "<tr>";
        echo "<td>";
        echo $fila->usu_user;
        echo "</td>";
        echo "<td>";
        echo $fila->emp_id;
        echo "</td>";
        echo "<td>";
        echo $fila->emp_nom;
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

function cargarTablaUE(){
    if($conexion=conecatarBaseUE()){
    //echo "Aquí haríamos el resto de operaciones...";
    $sql= "SELECT * FROM asignacion 
    INNER JOIN empleado ON asignacion.emp_id = empleado.emp_id
    INNER JOIN usuario on asignacion.usu_user = usuario.usu_user";
    $datos = $conexion->query($sql);
    if (mysqli_num_rows($datos)>0){
        tablaUE($datos);
    } else {
        echo "<p>No se encontraron datos</p>";
    }

    }else {
        echo "<p>Servicio interrumpido</p>";
    }
}

function insertarUE($usu,$id){
    if($conexion=conecatarBaseUE()){
        //echo "Aquí haríamos el resto de operaciones...";
        $sql= "INSERT INTO asignacion (usu_user, emp_id) 
        VALUES ('$usu', '$id')";
        if ($conexion->query($sql)===true){
            echo "<p>Se agrego correctamente</p>";
        } else {
            echo "<p>No se encontraron datos</p>";
        }
    }else {
        echo "<p>Servicio interrumpido</p>";
    }
}

/*function buscarUE($id){
    if($conexion=conecatarBase()){
        $sql= "SELECT *  FROM emppleado WHERE emp_id = '$id'";
        $datos = $conexion->query($sql);
        if (mysqli_num_rows($datos)>0){
            $fila = $datos->fetch_object();
            echo $fila->emp_nom;
            //$_POST['c1']=$fila->campo1;dwd
        } else {
            echo "<p>No se encontraron datos</p>";
        }
    }else {
        echo "<p>Servicio interrumpido</p>";
    }
}*/

function deleteUE($usu, $id){
    if($conexion=conecatarBaseUE()){
        $sql= "DELETE FROM asignacion WHERE usu_user = '$usu' AND emp_id = '$id'";
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