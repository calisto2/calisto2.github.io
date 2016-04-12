<?php
session_start(); 
// controla de que la session sea correcta y que existe. Para que no pueda entrar cualquiera.
if (($_SESSION['usuario']!=null) && ( $_SESSION['categoria']== "1")) // comprueba que la session no sea nula       
{  // si es corrrecto
    echo "Hola estas en la session:  ".$_SESSION['usuario'];
}
else 
{
    header("location:index.html");    
}
?>