<?php
session_start();   // activar sistema de sessiones y  debe ser la primera instrucción del fichero php
// comprueba que la session no sea nula 
//if (($_SESSION['admin']!=null) && ($_SESSION['user']!=null))  
//{
/* recoger variables  */
$login=$_GET['login'];
$pass=$_GET['pass'];

$categoria = 0;   // tipo de usuario: 0 alumne  -  1 admin

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

//echo "num. de filas encontradas: ".mysqli_num_rows($consulta);

/*---------------------------------------------
//***** validamos los datos con la BBDD *******
----------------------------------------------*/
  if(mysqli_num_rows($consulta)>0) {   // En caso que devuelva algún registro es que existe el usuario. 
      while ($fila = $consulta->fetch_array(MYSQLI_BOTH))  /* MYSQLI_BOTH: array numérico y asociativo a escoger*/
       { 
/*
           echo $fila[0];
           echo "<br>";
            echo $fila[1];
           echo "<br>";
           echo $fila[2];
           echo "<br>";
*/
           $categoria = $fila["categoria"];   // recoger categoria de usuario
       }   
      $_SESSION['usuario']=$login;
      // echo "categoria ".$categoria;
    // Asignamos la session que correponda y le direcciona a la pagina correspondiente.
        switch ($categoria) {
          case "0":
          //    $_SESSION['usuario']=$login;
              $_SESSION['categoria']= $categoria;
              header("location:alumne.php"); 
              break;
          case "1":
           //   $_SESSION['admin']=$login;
              $_SESSION['categoria']= $categoria;
              header("location:admin.php");
               break;
          default:
              header("location:index.html");    
      }

  }
 else {  // Usuario No encontrado
   header("location:index.html");  
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