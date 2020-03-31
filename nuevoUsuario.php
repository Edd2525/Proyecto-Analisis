<html>
  <head>
  <title>Try here</title>
 </head>

 <body>
  <form method="post" action="">
   <input type="text" name="user"/>
   <input type="text" name="pass"/>       
   <input type="text" name="tipo"/>
   <input type="text" name="depa"/>
   <input type="text" name="sede"/>
   
   <input type="submit" class="button" name="insert" value="insert" />
   <input type="submit" class="button" name="select" value="select" />
   
  </form>
<?php  
//require 'funcionesUsuario.php';

/*$link = mysqli_connect("localhost", "root", "", "demo");


function insertar(){
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $tipo = $_POST['tipo'];
    $depa = $_POST['depa'];
    $sede = $_POST['sede'];
  
    $sql="INSERT INTO 'usuario' ('usu_user', 'usu_pass', 'usu_tipo', 'usu_depa', `usu_sede`) 
    VALUES ('$user','$pass','$tipo','$depa','$sede')";
  }
}*/

    
?>
</body>
</html>