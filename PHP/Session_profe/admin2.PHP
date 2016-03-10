<?PHP
session_start();
if ($_SESSION['admin']!=null)
{
    
ECHO " eres ADMIN ". $_SESSION['admin'];
    
}
else
{
   header("location:index.html"); 
}
echo "<a href='admin.php' > atras </a>";

echo "<a href='discon.php' > desconectar </a>";

?>
