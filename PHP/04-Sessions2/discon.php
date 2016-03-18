<?php
session_start();
session_destroy();
//Eliminar las cookies: Set the value to "" and the expiry date to yesterday (or any date in the past)
//setcookie("contador", "", time()-3600);
// unset all cookies
if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}
header("Location:index.html");
?>