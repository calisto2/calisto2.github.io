<?php
session_start();
if  ($_SESSION['alum']!=null) {
    // si es corrrecto
    echo "Hola estas en la session:  ".$_SESSION['alum'];
} 
else {
       header("location:index.html"); 
}
 /*----- Se efectua desde el html --------------------   
echo "<br><a href='alumne.php' > atras </a><br>";
echo "<a href='discon.php' > desconectar </a>";
-----------------------------------------------------*/
?>

<html>
<head>
	<title>Notas</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

<div id="paginacion">
   <a href='alumne.php'><span class="izquierda">&laquo; Anterior</span> </a>
   <a href='discon.php'><span class="derecha">Desconectar &raquo;</span></a>    
   <div class="clear"></div>
</div>
  <h1>Notas del Alumno</h1>

 </body>   
</html>