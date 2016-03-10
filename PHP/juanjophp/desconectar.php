<?php
session_start();//hay que ponerlo para que se entere de que se está utilizando las funciones de sesión
session_destroy();
header("location:DOS.html");

?>
