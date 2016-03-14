<html>
<head>
</head>
<body>
    <h1>Gestion Administracion</h1>
<?php
session_start(); 
// control de que la session es correcta y que existe. Para que no pueda entrar cualquiera
if ($_SESSION['admin']!=null)   // comprueba que la session no sea nula       
{  // si es corrrecto
    echo "Hola estas en la session:  ".$_SESSION['admin'];
}
else 
{
    header("location:index.html");    
}
// boton para desconectar session
echo "<br><a href='discon.php'> atras </a>";
echo "<br><a href='discon.php'> desconectar </a>";
echo "<br><a href='altas.php'> añadir alumno </a>";
echo "<br><a href='modificar.php'> modificar </a>";
echo "<br><a href='eliminar.php'> eliminar </a>";


    
?>
    </body>   
</html>