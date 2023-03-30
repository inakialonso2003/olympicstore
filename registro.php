<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro de usuarios</title>
    </head>
    <body>
        <h1>Regsitro de usuarios</h1>
        <form method="post" action="registrar.php">
            <label form="nombre_usuario">Nombre de usuario:</label>
            <input type="text" name="nombre_usuario" id="nombre_usuario" required>
            <br>
            <label for="contraseña">Contraseña:</label>
            <input type="password" name="contraseña" id="contraseña" required>
            <br>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
            <br>
            <label for="apellidos">Apellidos:</label> 
            <input type="text" name="apellidos" id="apellidos" required>
            <br>
            <label for="correo">Correo electrónico:</label> 
            <input type="email" name="correo" id="correo" required>
            <br>
            <input type="submit" value="Registrarse">
        </form>
    
    </body> 
</html>

