<html>
  <head>
  <title>Try here</title>
 </head>

 <body>
  <form method="post" action="">
   <input type="text" name="user"/>
   <input type="password" name="pass"/>       
   <input type="password" name="tipo"/>
   <input type="number" name="depa"/>
   <input type="number" name="cede"/>
   <textarea rows="5" cols="20" name="sede"></textarea>
   <input type="submit" name="reg"/>
  </form>
<?php  
  $con = mysql_connect("localhost","root","");
  if(!$con){
    die('No se conecto: '.mysql_error());
  }
  mysql_select_db("carnes", $con);
  

      
     
?>
</body>
</html>