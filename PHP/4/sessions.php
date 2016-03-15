<?php
session_start();   // activar sistema de sessiones y  debe ser la primera instrucción del fichero php
// comprueba que la session no sea nula 
//if (($_SESSION['admin']!=null) && ($_SESSION['user']!=null))  
//{
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
    if (($login=='alum') && ($pass!=null)) {
     $_SESSION['alum']=$login;
    header("location:alumne.php"); 
    }
        else {
            header("location:index.html"); 
        }
} 

//}

?>