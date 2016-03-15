<?php
session_start();

if  ($_SESSION['admin']!=null) {
  echo "<H1> Gestion de Altas </H1>";
  echo "Hola estas en la session:  ".$_SESSION['admin'];
} 
else {
       header("location:index.html"); 
}
    
echo "<a href='admin.php' > atras </a>";
echo "<a href='discon.php' > desconectar </a>";


?>