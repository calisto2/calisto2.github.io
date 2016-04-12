<?php


/*----- cambiado el codigo de direccionar a las paginas para que 
         se efectue desde la parte HTML en vez de entro del php.
// Direccionamos a las tareas realizar.
echo "<br><a href='anadir.php'> Añadir alumno </a>";
echo "<br><a href='modificar.php'> Modificar alumno </a>";
echo "<br><a href='eliminar.php'> Eliminar alumno </a>";
// boton para desconectar session
echo "<br><a href='discon.php'> Atras </a>";
echo "<br><a href='discon.php'> Desconectar </a>";
 ----------------------------------------------------------------------- */   
?>

<html>
<head>
	 <meta charset="UTF-8">
	 <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<div id="paginacion">
	   <a href='discon.php'><span class="izquierda">&laquo; Anterior</span> </a>
	   <a href='discon.php'><span class="derecha">Desconectar &raquo;</span></a>    
	   <div class="clear"></div>
	</div>
	 <h1>Gestion Administracion</h1>
	<ul>
		<li><a href='anadir.php'> Añadir alumno </a></li>
		<li><a href='modificar.php'> Modificar alumno </a></li>
		<li><a href='eliminar.php'> Eliminar alumno </a></li>
	</ul>
 </body>   
</html>