<?PHP
session_start();
if ($_SESSION['user']!=null)
{
ECHO " eres USUARIO ". $_SESSION['user'];
    
}
else
{
   header("location:index.html"); 
}
echo "<a href='user.php' > atras </a>";

echo "<a href='discon.php' > desconectar </a>";

?>
