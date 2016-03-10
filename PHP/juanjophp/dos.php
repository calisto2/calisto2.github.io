<?php
session_start(); //activa el sistema de sesiones pero no ha empezado la sesión aún y ha de ser la primera instrucción del archivo

if(($_SESSION['admin']==null)|&& ($_SESSION['user']==null))// Si No tiene session abierta
{
    


    
    
    
    
    
    
$login=$_POST['login'];
$password=$_POST['password'];

//comprobar datos+





//detectar usuario
if(($login=="admin")&&($password=="admin"))
{
    $_SESSION['admin']=$login; //o $_POST['login]; activa la sesión del administrador
    header("location:admin.php");
}
else
{
if(($login=="juanjo")&&($password=="juanjo"))
    {
    $_SESSION['user']=$login;//o $_POST['login]; activa la sesión del usuario
    header("location:user.php");
    }
    else
    {
    header("location:DOS2.html");
    }
}
?>
