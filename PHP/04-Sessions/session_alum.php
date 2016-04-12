<?php
session_start(); 
// control de que la session es correcta y que existe. Para que no pueda entrar cualquiera
if (($_SESSION['usuario']!=null) && ( $_SESSION['categoria']== "0")) // comprueba que la session no sea nula y categoria alumno           
{  // si es corrrecto
    echo "Hola estas en la session:  ".$_SESSION['usuario'];
}
else 
{
    header("location:index.html");    
}
?>