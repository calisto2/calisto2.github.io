<?PHP
session_start();
if ($_SESSION['admin']!=null)
{
ECHO " eres ADMINISTRADOR ". $_SESSION['admin'];
}
else
{
   header("location:index.html"); 
}
echo "<a href='discon.php' > atras </a>";
echo "<a href='admin1.php' > admin1 </a>";
echo "<a href='admin2.php' > admin2 </a>";
echo "<a href='discon.php' > desconectar </a>";
?>
