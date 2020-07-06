<?php
session_start();
if(isset($_POST['nombre']))
{ 
$nombre = $_POST['nombre']; 
$_SESSION['nombre'] = $nombre; // El usuario en sesion 
}

if(isset($_POST['agregar'])){ 
$clave = array_keys($_POST); 
$producto = $clave[1]; 
if(!is_array($_SESSION['pedido'])) 
{
$_SESSION['pedido'] = array();  // Se crea array de pedido
}
if(array_key_exists("$producto",$_SESSION['pedido'])){ 
$cantidad = $_SESSION['pedido']["$producto"]; 
$_SESSION['pedido']["$producto"] = ++$cantidad; 
} 
else { 
$_SESSION['pedido']["$producto"] = 1; 
} 
} 
if(isset($_GET['Quitar'])){ 
$clave = array_keys($_GET); 
$producto = $clave[1]; 
unset($_SESSION['pedido'][$producto]);
}

echo "Usuario: ".$_SESSION['nombre'];

?>
<br/>

<a href="index.php"> Cerrar Sesion</a>

<html> 
<head> 
<meta charset=utf-8" /> 
</head> 
<body> 
    <h1>Utiles Escolares</h1>
<form action="Producto.php" method="post"> 
<input type="hidden" name="agregar"> 
<table border="1"> 
<td width="150"> 
Producto: <b>Goma de Borrar</b><br> 
<img src="ImagenProductos/goma borrar.jpg" width="100" height="100" alt="goma borrar"/>
Descripcion: <b>Goma para borrar lapiz de mina</b><br> 
Precio: <b>250</b><br> 
<input type="submit" name="Goma" id="button" value="Añadir al carro">
</td> 
<td width="150">    


Producto: <b>Pegamento</b><br> 
<img src="ImagenProductos/pegamento.jpg" width="100" height="100" alt="pegamento"/>
Descripcion: <b>Pegamento para uso escolar</b><br> 
Precio: <b>350</b><br> 
<input type="submit" name="Pegamento" id="button" value="Añadir al carro">
</td> 
<td width="150"> 
    
Producto: <b>Tijeras</b><br> 
<img src="ImagenProductos/tijeras.jpg" width="100" height="100" alt="tijeras"/>
Descripcion: <b>Tijeras para cortar materiales de uso escolar</b><br> 
Precio: <b>300</b><br> 
<input type="submit" name="Tijeras" id="button" value="Añadir al carro">
</td> 
<td width="150"> 

Producto: <b>Cuaderno</b><br> 
<img src="ImagenProductos/cuaderno.jpg" width="100" height="100" alt="cuaderno"/>
Descripcion: <b>Cuaderno marca Torre de uso escolar</b><br> 
Precio: <b>400</b><br> 
<input type="submit" name="Cuaderno" id="button" value="Añadir al carro">

</table> 
</form> 
    
<form action="Producto.php" method="get"> 
<h1>Carro de compras </h1> 
<input type="hidden" name="Quitar"> 

<?php 
if(!empty($_SESSION['pedido'])){ //Si hay productos en el carro de compras.
foreach($_SESSION['pedido'] as $prod => $unidades) { 
echo "$unidades Unidad(es) del producto $prod"; 
echo "<input type='Submit' name='$prod' value='Quitar'><br>"; } 
?> 

</form> 
    <form action="Venta.php" method="post"> 
<input type='Submit' name='Comprar' value="Confirmar Compra"> 
</form> 
    
<?php 
} 
?> 
</body> 
</html>
