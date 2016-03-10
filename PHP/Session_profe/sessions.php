<?php
session_start(); //activar el sistema de sesiones

if (($_SESSION['admin']==null)&&($_SESSION['user']==null))

{

$login=$_POST['login'];
$password=$_POST['password'];

// comprobar datos

// detectar usuario
if (($login=="admin")&&($password=="admin"))
{
    $_SESSION['admin']=$login; // o $_POST['login'];
    header("location:ADMIN.PHP");
}
else
{
if (($login=="cesc")&&($password=="sanah"))
    {
     $_SESSION['user']=$login; // o $_POST['login'];
    header("location:USER.PHP");
    }
   else
   {
header("location:index.html");
   }
}
}
?>