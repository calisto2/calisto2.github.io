<?php

$NOMBRE=$_POST['nom'];
$EDAD=$_POST['edat'];
$SUELDO=$_POST['sou'];

if((!is_numeric($EDAD))||(!is_numeric($SUELDO))){header("location:uno2.html");}

// CAMPOS VACIOS (NOMBRE)
//if ($NOMBRE=="")
if (strlen($NOMBRE)<3)
{header("location:uno2.html");}
// RANGO DE EDAD
if (($EDAD<16)||($EDAD>67)){header("location:uno2.html");}
// RANGO DE SUELDO
if (($SUELDO<10000)||($SUELDO>3000000)){header("location:uno2.html");}


echo "hola ".$NOMBRE." que tal estas <br>";

echo "tienes ".$EDAD." años y cobras ".$SUELDO." euros";
$SUELDO=$SUELDO*1.07;
echo "tu nuevo sueldo es ".$SUELDO." euros";


if ($EDAD>=18)
{
   echo "mayor de edad"; 
}
else
{
    echo "menor de edad";
}
?>