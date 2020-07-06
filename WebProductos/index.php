<?php
include('Login.php');
 
if(isset($_SESSION['login_user_sys'])){
header("location: Producto.php");
}
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Utiles Escolares</title>
    </head>
    <body>
        <h1> Iniciar sesión</h1>
        <div class="login">
            <form action="Producto.php" method="post">
                <p> Usuario </p> <input type="text" placeholder="Nombre de Usuario" name="nombre" required maxlength="50"> <br/>
                <p> Contraseña </p> <input type="password" placeholder="Contraseña" name="pass" required maxlength="50"> <br/>
                <input name="submit" type="submit" value="Ingresar"> <br/>
            </form>
        </div>
        <?php
        
        ?>
    </body>
</html>
