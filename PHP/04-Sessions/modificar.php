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
/*--------- dejado de utilizar par ponerlo en el el html-----------  
echo "<br><a href='admin.php' > Atras </a><br>";
echo "<a href='discon.php' > Desconectar </a>";
-------------------------------------------------------------------*/
?>

<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

<div id="paginacion">
   <a href='admin.php'><span class="izquierda">&laquo; Anterior</span> </a>
   <a href='discon.php'><span class="derecha">Desconectar &raquo;</span></a>    
   <div class="clear"></div>
</div>
  <h1>Modificación Datos Alumnos</h1>

 </body>   
</html>