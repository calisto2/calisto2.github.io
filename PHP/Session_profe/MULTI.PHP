<?PHP


ECHO "MOSTRAR LA TABLA DE MULTIPLLICAR DEL 1 AL 10 DEL VALOR DADO (ENTRE 1 Y 25)";
$num=$_POST['valor'];
if (($num<1)||($num>25)||(!is_numeric($num))){header("location:tabla.html");}

echo "<table border=2>";
for($i=0;$i<10;$i++)
{
    echo "<tr><td>".$num."</td><td>*</td><td>".($i+1)."</td><td>=</td><td>".$num*($i+1)."</td></tr>";
}
echo "</table>";
?>
<h1>dfghj</h1>