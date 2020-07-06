<?php
// datos configuracion base de datos
$servername = "localhost";
$database = "CrearTienda-1.0";
$usuario = "usuario"; // nombre usuario
$password = " ";
					
//conexion a base de datos MySql						
$conn = mysqli_connect($servername, $usuario, $password, $database);

// Chequear conexion

if ($conn->connect_error) {
die("Error, Conexion fallida: " . $conn->connect_error);
}