<?php

// $_GET si se ha enviado los dato con get y $_POST si se ha enviado con post
// el + es un punto .
// Las variables llevan un $ delante $Nombre y se suelen escribir en minúsculas, aunque aquí no es el caso...

$numero=$_POST['numero'];

/* Comprueba si la variable es numérica o no y si no lo es envía de nuevo al html... o donde sea */
if((!is_numeric($numero))||($numero<1)||($numero>25))
    
{header("location:tabla2.html");} //Envia a una página 2 con un texto de error y también controla si el campo está vacio (que sea obligatorio)





//operaciones
echo "<table border=1>";
for($i=0;$i<10;$i++)
{
    echo "<tr><td>".$numero."</td><td>*</td><td>".($i+1)."</td><td>=</td><td>".$numero*($i+1)."</td></tr>";
}
echo "</table>";  



?>
