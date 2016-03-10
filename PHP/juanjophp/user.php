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

echo "<a href='dos.php'>atrás</a>";// se elimina porque no tiene sentido volver atrás
echo "<a href='user1.php'>user1</a>";
echo "<a href='user2.php'>user2</a>";

echo "<a href='desconectar.php'>Desconectar</a>";
?>