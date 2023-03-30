<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "olympic_store";
$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}

$nombre_usu = $_POST["nombre_usuario"];
$contraseña =$_POST["contraseña"];
$nombre =$_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];

$sql = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usu'";
$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) > 0) {
    echo "Este nombre de usuario ya está en uso, elige otro nombre de usuario. "; 
    echo '<a href="registro.php"> Volver al registro</a>';
} else {
    $sql = "INSERT INTO usuarios (nombre_usuario, contraseña, nombre, apellidos, correo_e) "
            . "VALUES ('$nombre_usu','$contraseña','$nombre','$apellidos','$correo')";

    if (mysqli_query($conn, $sql)) {
        echo '<p>¡Te has registrado correctamente! Haz click <a href="login.php"> aquí</a> para volver al inicio de sesión. </p>'; 
    } else {
        echo "Hubo un error al registrar el usuario: " . mysqli_error($conn);
        echo '<a href="login.php"> Volver al inicio de sesión</a>';
    }
}

mysqli_close($conn);
?>
