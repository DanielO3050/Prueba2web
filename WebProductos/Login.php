<?php
session_start(); // Inicio de sesion
session_destroy();
$error=''; // Para mensaje de error
if (isset($_POST['submit'])) {
if (empty($_POST['nombre']) || empty($_POST['pass'])) {
$error = "Usuario o Contraseña es inválido";
}
else
{
// Definir username y password
$username=$_POST['nombre'];
$password=$_POST['pass'];
include("Config/Conexion.php");
 
$query=mysqli_query($con,$sql);
$counter=mysqli_num_rows($query);
if ($counter==1){
		$_SESSION['login_user_sys']=$username; // Inicio de la sesion
		header("Location: Producto.php"); // Redireccionando a la pagina Producto.php
	
	
} else {
$error = "Error, usuario o contraseña inválido.";	
}
}
}
?>
