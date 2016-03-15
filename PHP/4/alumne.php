<html>
<head>
</head>
<body>
    <h1>Gestion Alumnos</h1>
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
// boton para desconectar session
echo "<br><a href='discon.php'> atras </a>";
echo "<br><a href='discon.php'> desconectar </a>";
//mostrar notas sin cerrar a session
echo "<br><a href='notas.php'> ver notas </a>";

    
?>
    </body>   
</html>