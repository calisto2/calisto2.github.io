<?php
session_start(); 
// control de que la session es correcta y que existe. Para que no pueda entrar cualquiera
if ($_SESSION['alum']!=null)   // comprueba que la session no sea nula       
{  // si es corrrecto
    echo "Hola estas en la session:  ".$_SESSION['alum'];
}
else 
{
    header("location:index.html");    
}
/*----- cambiado el codigo de direccionar a las paginas para que 
         se efectue desde la parte HTML en vez de entro del php.
// Direccionamos a las tareas realizar.
// boton para desconectar session
echo "<br><a href='discon.php'> atras </a>";
echo "<br><a href='discon.php'> desconectar </a>";
//mostrar notas sin cerrar a session
echo "<br><a href='notas.php'> ver notas </a>";
 -----------------------------------------------------------------------*/       
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
  <h1>Gestion Alumnos</h1>
  <ul>
  	<li><a href='notas.php'> Ver notas </a></li>
  </ul>

 </body>   
</html>