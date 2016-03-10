<?php
session_start();//hay que ponerlo para que se entere de que se está utilizando las funciones de sesión
if($_SESSION['admin']!=null)
{
echo "Eres administrador: ".$_SESSION['admin'];
}
else
{
    {header("location:DOS.html");}
}

echo "<a href='dos.php'>atras</a>";// se elimina porque no tiene sentido volver atrás
echo "<a href='admin1.php'>admin1</a>";
echo "<a href='admin2.php'>admin2</a>";

echo "<a href='desconectar.php'>Desconectar</a>";
?>