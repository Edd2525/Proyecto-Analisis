<?php
session_start();
require 'conexion.php';
   if($_SERVER["REQUEST_METHOD"] == "POST") {
    
      $myusername = $_POST['username'];
      $mypassword = $_POST['pass'];
	$encryptedPass = md5($mypassword);
      $sql = "SELECT id FROM login WHERE username = '$myusername' and password = '$encryptedPass'";
      $result = $mysqli->query($sql);
      $row = $result->fetch_array(MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);

      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: dashboard.html");
      }else {
		$error = TRUE;
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
      <h1>Endurance Costa Rica</h1>
    </div>

    <!-- Login Form -->
    <form method="POST" onsubmit="return error();">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Usuario">
      <input type="password" id="password" class="fadeIn third" name="pass" placeholder="Contraseña">
      <input type="submit" class="fadeIn fourth" value="Log In">
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