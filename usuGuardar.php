<?php 
    session_start();
    require 'conexion.php';
    

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $tipo = $_POST['tipo'];
        $depa = $_POST['depa'];
        $sede = $_POST['sede'];
        /* Select queries return a resultset */
        if ($result = $mysqli->query("SELECT * FROM 'usuario' WHERE usu_user='$user'")) {
          if($result->num_rows>0){
            echo " 
            <p class='avisos'>El numero de cédula ya esta registrado</p> 
            "; 
          }else{
            echo " 
            <p class='avisos'>Vamos bien</p> 
            "; 
          }
          
          //$result->
          /* free result set */
          $result->close();
        }
      }
?>