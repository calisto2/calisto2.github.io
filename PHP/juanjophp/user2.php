<?php
session_start();//hay que ponerlo para que se entere de que se está utilizando las funciones de sesión
if($_SESSION['user']!=null)
{

echo "Eres usuario: ".$_SESSION['user'];
}
else
{
    {header("location:DOS.html");}
}

echo "<a href='user.php'>atrás</a>";

echo "<a href='desconectar.php'>Desconectar</a>";
?>