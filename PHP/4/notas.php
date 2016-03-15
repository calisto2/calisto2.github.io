<?php
session_start();

if  ($_SESSION['alum']!=null) {
    // si es corrrecto
//    echo "<H1> Mostrar Notas </H1>";
    echo "Hola estas en la session:  ".$_SESSION['alum'];
} 
else {
       header("location:index.html"); 
}
    
echo "<a href='alumne.php' > atras </a>";
echo "<a href='discon.php' > desconectar </a>";


?>