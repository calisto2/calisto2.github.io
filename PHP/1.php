<?php
$nombre=$_GET['nom'];
$edad=$_GET['edat'];
$sueldo=$_GET['sou'];


//***** validamos los datos  *******
if (($edad<16)||($edad>67)) {
    header("location:error2.html");   
}
if (($sueldo<1000) || ($sueldo>67000)) {
    header("location:error2.html");   
} 
if (strlen($nombre<3)) {header("location:error2.html");}

//if (!is_numeric($edad)){header("location:error2.html");} 
echo "Hola ".$nombre." Que tal estas <br> Tue edad es ".$edad;


    
?>