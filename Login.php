<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "olympicstore";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Fallo al conectarse: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = $_POST["nombre_usuario"];
    $contraseña = $_POST["contraseña"];
    
    $sql = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usuario' AND contraseña = '$contraseña'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION["usuario_id"] = $row["id_usuario"];
        $_SESSION["nombre"] = $row["nombre_usuario"];
        header("location: index.php");
    } else {
        $error = "Nombre de usuario o contraseña incorrecta.";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="div_top">
            OLYMPICSTORE
        </div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="div_general">
                <div class="div_login">
                    <div class="div_login_iniciosesion">
                        <div class="div_login_logo">
                            <img class="imagen" src="logo.png">
                        </div>
                        <div class="div_login_usucon">
                            <p>Usuario: </p> <input class="usucontra" type="text" required=""><br><br>
                            <p>Contraseña:</p> <input class="usucontra" type="password" required> <br><br>
                            <button>Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>

<?php
if (!empty($error)) {
    echo "<p>$error</p>";
}
?>