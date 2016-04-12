
<?php

$nombre=$_GET['login'];
$pass=$_GET['pass'];

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
$ssql="INSERT INTO usuarios (login, password, categoria)  VALUES('$nombre','$pass',0)";

//echo $ssql;
//$ssql= "select * from usuarios";
$res= $conn->query($ssql);
 

if($res)
 echo("Alta correcta");
else
 echo("Alta Incorrecta".mysql_errno());

?>

<html>
<head>
	 <meta charset="UTF-8">
	 <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<div id="paginacion">
	   <a href='anadir.php'><span class="izquierda">&laquo; Anterior</span> </a>
	   <a href='discon.php'><span class="derecha">Desconectar &raquo;</span></a>    
	   <div class="clear"></div>
	</div>
    

    
    
 </body>   
</html>

