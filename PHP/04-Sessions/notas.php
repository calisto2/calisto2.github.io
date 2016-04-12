<?php

/*
session_start();
if  ($_SESSION['alum']!=null) {
    // si es corrrecto
    echo "Hola estas en la session:  ".$_SESSION['alum'];
} 
else {
       header("location:index.html"); 
}

*/
include "session_alum.php";

 /*----- Se efectua desde el html --------------------   
echo "<br><a href='alumne.php' > atras </a><br>";
echo "<a href='discon.php' > desconectar </a>";
-----------------------------------------------------*/

    /*  --- conectar con la bbddd ---- */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prueba";
    
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("No se pudo conectar: " . mysqli_connect_error());
}


//$consulta = $conn->query('select * from usuarios where login='.$login. ' and password='.$pass.';');
//$ssql= "select * from usuarios where login='".$login."'" . " and password='".$pass."'";
////$ssql= "select * from usuarios where login='".$_SESSION['usuario']."'";
$ssql= "SELECT  login, n.id_asignatura, asig.descripcion, nota  FROM notas_asignatura n INNER JOIN  alumnos  a ON  a.dni=n.dni INNER JOIN usuarios u ON a.dni=u.dni INNER JOIN asignaturas asig ON n.id_asignatura=asig.id_asignatura   WHERE  login='".$_SESSION['usuario']."'";

//$ssql= "select * from usuarios";
$consulta= $conn->query($ssql);
 

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


/*---------------------------------------------
//***** Mostramos las notasdel alumno *******
----------------------------------------------*/
if(mysqli_num_rows($consulta)>0) {   // En caso que devuelva algún registro es que existe el usuario. 
    
  <table style="width:100%">
      while ($fila = $consulta->fetch_array(MYSQLI_BOTH))  /* MYSQLI_BOTH: array numérico y asociativo a escoger*/
       {
    /*      
          ?>
          <pre><code>
            <?php var_dump($fila); ?>
          </code></pre>
          <?php
   */   
           echo $fila[1];
           echo " - ";
           echo $fila['descripcion'];
           echo " - ";
           echo $fila['nota'];
           echo "<br>";
       }  
    </table>
}
?>
</body>   
</html>