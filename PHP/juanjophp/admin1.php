<?php
session_start();//hay que ponerlo para que se entere de que se está utilizando las funciones de sesión
if($_SESSION['admin']!=null)
{

echo "Eres usuario: ".$_SESSION['admin'];
}
else
{
    {header("location:DOS.html");}
}

echo "<a href='admin.php'>atrás</a>";

echo "<a href='desconectar.php'>Desconectar</a>";
?>