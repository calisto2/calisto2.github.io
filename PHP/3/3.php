<?php
session_start();   // activar sistema de sessiones y  debe ser la primera instrucción del fichero php
// comprueba que la session no sea nula 
if ($_SESSION['admin']!=null) || ($_SESSION['user']!=null)   
{
    
}
else
{


/* recoger variables  */
$login=$_GET['login'];
$pass=$_GET['pass'];


//***** validamos los datos  *******
if (($login=='admin')&&($pass=='admin')) {
    /*  SESSION  es una variable del sistema que indica que se ha logeado correctamente */
    $_SESSION['admin']=$login;
    header("location:admin.php");   
}
else
{
    if (($login=='user') && ($pass=='111')) {
//    $_SESSION['user']=$login;
    header("location:user.html"); 
    }
        else {
            header("location:error2.html"); 
        }
} // else principal
º



//if (!is_numeric($edad)){header("location:error2.html");} 
//echo "Hola ".$nombre." Que tal estas <br> Tue edad es ".$edad;


}  //fin else comprobación de session
?>