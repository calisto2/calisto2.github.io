<?php

/*
session_start();
if  ($_SESSION['admin']!=null) {
  echo "Hola estas en la session:  ".$_SESSION['admin'];
} 
else {
       header("location:index.html"); 
}
*/
include "session_admin.php";

/*----------------- -----------------------  
echo "<br><a href='admin.php' > Atras </a><br>";
echo "<a href='discon.php' > Desconectar </a>";
-------------------------------------*/
?>

<html>
<head>
	<title>Añadir</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>


    
<div id="paginacion"><div id="paginacion">

   <a href='admin.php'><span class="izquierda">&laquo; Anterior</span> </a>
   <a href='discon.php'><span class="derecha">Desconectar &raquo;</span></a>    
   <div class="clear"></div>
</div>
  <h1>Altas de Alumnos</h1>

<FORM name="anadir" id="anadir" action="grabar.php" method="get">
      <label>Login: </label><input type="text" name="login">
      <label>Password:</label><input type="text" name="pass">
      <label>DNI:</label><input type="text" name="dni">
       <label>nombre:</label><input type="text" name="nombre">
      <label>apellidos:</label><input type="text" name="apellidos">
      <input type="submit" value="Grabar" >
</FORM>
    
 </body>   
</html>