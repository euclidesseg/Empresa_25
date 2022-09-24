<?php 
/*$usr=$_POST['usr'];
$clave=$_POST['clave'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];*/
$usr = $_REQUEST['usr'];
$nombre = $_REQUEST['nombre'];
$correo = $_REQUEST['correo'];
$clave = $_REQUEST['clave'];
$cnx =  mysqli_connect("localhost","root","","Empresa") or die("Ha sucedido un error inexperado en la conexion de la base de datos");
$result = mysqli_query($cnx,"select correo from usuario where correo = '$correo'");
if (mysqli_num_rows($result)==0)
{
	mysqli_query($cnx,"INSERT INTO usuario (usr,nombre,correo,clave) VALUES ('$usr','$nombre','$correo','$clave')");	
}
else
{
	echo "Correo ya existe....";
}
mysqli_close($cnx);
 ?>
