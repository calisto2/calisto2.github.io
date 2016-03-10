<?PHP
/*recogemos valores del formulario y lo asignamos las variables*/
$numtabla=$_GET['tablanum'];

/* valores validos entres 1-25 */
if ($numtabla>25 || $numtabla<1) {header('location:form_multi_error.html');}


/* ----- Genramos la tabla con bucle for y concatenando las etiquetas HTML table -----*/
echo "<table border=\"1\">";
echo '<tr><th>tabla</th><th></th><th>' .$numtabla .'</th></tr>';

    for ($r =1; $r <=10; $r++){

        echo'<tr>';

           echo '<td>' .$numtabla.'</td>';
           echo '<td>X</td>'; 
           echo '<td>' .$r  .'</td>';
           echo '<td>=</td>';
           echo '<td>' .$numtabla*$r.'</td>';

        echo '</tr>'; // cierre tr tag aqui
    }

echo"</table><br><br>";
/*-----------*/
echo "<table border=\"1\">";

    for ($r =1; $r <=10; $r++){

        echo'<tr>';

        for ($c = 0; $c < $numtabla; $c++) {
           echo '<td>' .$numtabla*$r.'</td>';
        }
        echo '</tr>'; // close tr tag here
    }

echo"</table><br><br>";

?>