<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);  // no reporta mensajes errores tip notice
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
/* --- Contador de visitas usando cookies ---*/
 if(isset($_COOKIE['contador']))
  { 
    // Caduca en un año 
    setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60); 
    $mensaje = 'Número de visitas: ' . $_COOKIE['contador']; 

  } 
  else 
  { 
    // Caduca en un año 
    setcookie('contador', 1, time() + 365 * 24 * 60 * 60); 
    $mensaje = 'Bienvenido a nuestra página web'; 

    for ($i=0; $i<5; $i++) {  //guardamos en un array de cookies, para mantenerlos mientras dure session.
          setcookie ("asignatura[$i]", mt_rand(4,10));
          $_SESSION['notas'] = "asignadas";
        }
  } 
 /* 
  //  Generamos notas aleatorias entre 4-10 en la primera vez que consulta las notas.
 if (!isset($_COOKIE['contador'])) {
        for ($i=0; $i<5; $i++) {  //guardamo en un array de cookies, para mantenerlos mientras dure session.
          setcookie ("asignatura[$i]", mt_rand(4,10));
          $_SESSION['notas'] = "asignadas";
        }
  }
*/
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

  <?php  
     // valor de las cookies no se hacer un primer reload de la pagina. (tengo que mirar otra solucion)
        if ($_COOKIE['contador'] < 1){
             echo "<a href='notas.php' > Pulsar para cargar sus notas </a>";
        }
        //print_r($_COOKIE['asignatura'] );
        //mostramos la información del array de cookies que contienes las notas.
        echo "<br/>";
        foreach ((array) $_COOKIE['asignatura'] as $name => $value) {
          $name = 'asignatura-'.(htmlspecialchars($name)+1);
          $value = htmlspecialchars($value);
          echo "$name : $value <br/>\n";
        }

  ?>

  <p>  
	<?php echo $mensaje; ?> 
  </p>

 </body>   
</html>