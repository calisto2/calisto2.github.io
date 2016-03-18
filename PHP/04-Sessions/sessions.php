<?php
session_start();   // activar sistema de sessiones y  debe ser la primera instrucción del fichero php
// comprueba que la session no sea nula 
//if (($_SESSION['admin']!=null) && ($_SESSION['user']!=null))  
//{
/* recoger variables  */
$login=$_GET['login'];
$pass=$_GET['pass'];

/*  --- conectar con la bbddd ---- */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prueba";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("No se pudo conectar: " . mysqli_connect_error());
}
echo "Connected successfully ";

//$consulta = $conn->query('select * from usuarios where login='.$login. ' and password='.$pass.';');
$ssql= "select * from usuarios where login='".$login."'" . " and password='".$pass."'";
echo $ssql;
//echo $ssql[0];

$consulta= $conn->query($ssql);

echo "<br>";
while ($fila = $consulta->fetch_array(MYSQLI_NUM))
       {
           echo $fila[0];
           echo "<br>";
            echo $fila[1];
           echo "<br>";
       }



//***** validamos los datos  *******
/*--------------------------------------
if (($login=='admin')&&($pass=='admin')) {

    $_SESSION['admin']=$login;
    header("location:admin.php");   
}
else
{
   // if (($login=='alum') && ($pass!=null)) {
    if (($login!=null) && ($pass!=null)) {
     $_SESSION['alum']=$login;
    header("location:alumne.php"); 
    }

        else {
            header("location:index.html"); 
        }

} 
------*/

?>