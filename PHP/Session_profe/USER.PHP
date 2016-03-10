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
echo "<a href='discon.php' > atras </a>";
echo "<a href='user1.php' > user1 </a>";
echo "<a href='user2.php' > user2 </a>";
echo "<a href='discon.php' > desconectar </a>";

?>
