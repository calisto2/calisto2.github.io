<?php

// $_GET si se ha enviado los dato con get y $_POST si se ha enviado con post
// el + es un punto .
// Las variables llevan un $ delante $Nombre y se suelen escribir en minúsculas, aunque aquí no es el caso...

$NOMBRE=$_POST['nombre'];
$EDAD=$_POST['edad'];
$SUELDO=$_POST['sueldo'];

/* Comprueba si la variable es numérica o no y si no lo es envía de nuevo al html... o donde sea */
if((!is_numeric($EDAD))||(!is_numeric($SUELDO))){header("location:uno2.html");} //Envia a una página 2 con un texto de error y también controla si el campo está vacio (que sea obligatorio)

// Control de campos vacios (solo el NOMBRE porque los otros campos los controla la instrucción anterior)
//if($NOMBRE=="") ya no es necesario con la instrucción siguiente porque el campo vacío es menor que 3
if(strlen($NOMBRE)<3){header("location:uno2.html");}// se puede poner junto al anterior if o también todo separado para poner un mensaje de error para cada input erróneo

// Rango de edad
if(($EDAD<16)||($EDAD>67)){header("location:uno2.html");}

// Rango de sueldo
if(($SUELDO<10000)||($SUELDO>3000000)){header("location:uno2.html");}

echo "Hola ".$NOMBRE.", ¿qué tal estás? <br>";
echo "Tienes ".$EDAD." años de edad y cobras un sueldo de ".$SUELDO." euros <br>";

//Que el nombre tenga mínimo de tres carácteres


//operaciones

$SUELDO=$SUELDO*1.07;
echo "Tu nuevo sueldo será de ".$SUELDO." euros <br>";

//if else

if($EDAD>=18){
    echo "Mayor de edad";
}
else
{
    echo "Menor de edad";
}
?>