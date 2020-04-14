<?php
include ("datos.php");

function conecatarBaseEmp(){
    global $host, $usuario, $clave, $base;
    if ($conexion = new mysqli($host,$usuario,$clave,$base)){
        return $conexion;
    }else{
        return false;
    }
}


function tablaEmp($datos){
    while($fila = $datos->fetch_object()){
        echo "<tr>";
        echo "<td>";
        echo $fila->emp_id;
        echo "</td>";
        echo "<td>";
        echo $fila->emp_nom;
        echo "</td>";
        echo "<td>";
        echo $fila->emp_ape;
        echo "</td>";
        echo "<td>";
        echo $fila->emp_hora;
        echo "</td>";
        echo "</tr>";
    }
}

function cargarTablaEmp(){
    if($conexion=conecatarBaseEmp()){
    //echo "Aquí haríamos el resto de operaciones...";
    $sql= "SELECT * FROM empleado";
    $datos = $conexion->query($sql);
    if (mysqli_num_rows($datos)>0){
        tablaEmp($datos);
    } else {
        echo "<p>No se encontraron datos</p>";
    }

    }else {
        echo "<p>Servicio interrumpido</p>";
    }
}

function insertarEmp($id,$nom,$ape,$hora){
    if($conexion=conecatarBaseEmp()){
        //echo "Aquí haríamos el resto de operaciones...";
        $sql= "INSERT INTO empleado (emp_id, emp_nom, emp_ape, emp_hora) 
        VALUES ('$id', '$nom', '$ape','$hora')";
        if ($conexion->query($sql)===true){
            echo "<p>Se agrego correctamente</p>";
        } else {
            echo "<p>No se encontraron datos</p>";
        }
    }else {
        echo "<p>Servicio interrumpido</p>";
    }
}

function buscarEmp($id){
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
}

function updateEmp($id,$nom,$ape,$hora){
    if($conexion=conecatarBaseEmp()){
        $sql= "UPDATE empleado SET emp_nom = '$nom', emp_ape = '$ape'
        , emp_hora = '$hora' WHERE emp_id = '$id'";
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

function deleteEmp($id){
    if($conexion=conecatarBaseEmp()){
        $sql= "DELETE FROM empleado WHERE emp_id = '$id'";
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