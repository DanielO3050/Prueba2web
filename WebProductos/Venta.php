<?php
session_start(); 

echo "<h1 align='center'> Productos seleccionados </h1>"; 
foreach($_SESSION['pedido'] as $prod => $unidades) { 
echo "<p align='center'>$unidades $prod</p>"; 
} 
?> 
<a href="index.php">Finalizar</a>
