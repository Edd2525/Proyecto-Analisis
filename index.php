<?php
session_start();
require 'conexion.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $myusername = $_POST['username'];
  $mypassword = $_POST['pass'];
  /* Select queries return a resultset */
  if ($result = $mysqli->query("SELECT * FROM usuario WHERE usu_user = '$myusername' and usu_pass = '$mypassword' ")) {
    if($result->num_rows == 1){
      //guardar username aqui
      //avisar que entro correctamente
      header("location: dashboard.html");
    }else{
      //poner mensaje de error
      printf("Fallo");
    }
    
    //$result->
    /* free result set */
    $result->close();
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/loginStyle.css">
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Icon -->
    <div class="fadeIn first">
      <h2 class="active">Sistema de Control</h2>
      <h1>Inicio de Sesion</h1>
    </div>

    <!-- Login Form -->
    <form method="POST" onsubmit="return error();">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Usuario">
      <input type="password" id="password" class="fadeIn third" name="pass" placeholder="Contraseña">
      <input type="submit" class="fadeIn fourth" value="Ingresar">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#" onclick="return olvidoUser();">Olvidó Usuario/Contraseña?</a>
    </div>

  </div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>	
<script>
	function olvidoUser(){
		var user = document.getElementById("login").value;
		swal("Gracias " + user, "Pronto nos contactaremos con usted", "success");
	}

	function error(){
			var error = "<?php echo $error?>";
			if(error == 1){
				alert('Debes de ingresar un usuario o contraseña valido');
			}
				
	}
</script>


</body>
</html>