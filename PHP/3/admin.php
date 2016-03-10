<?php
session_start(); 
// control de que la session es correcta y que existe. Para que no pueda entrar cualquiera
if ($_SESSION['admin']!=null)   // comprueba que la session no sea nula       
{  // si es corrrecto
    echo "Hola  Que tal estas <br> Tue edad es ".$_SESSION['admin'];
}
else 
{
    header("location:error2.html");    
}
// boton para desconectar session
echo "<a href='discon.php'> desconectar </a>"
    
?>