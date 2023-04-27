<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "olimpicstore_v2";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Fallo al conectarse: " . mysqli_connect_error());
}


$ID_usuario = $_SESSION["ID_usuario"];

$sql = "SELECT bibliotecas_juegos.ID_biblioteca, bibliotecas_juegos.ID_juego, juegos.nombre, juegos.PEGI 
                FROM bibliotecas_juegos 
                INNER JOIN juegos ON bibliotecas_juegos.ID_juego = juegos.ID_juego
                INNER JOIN usuarios ON bibliotecas_juegos.ID_biblioteca = usuarios.ID_biblioteca 
                WHERE usuarios.ID_usuario = $ID_usuario;
";

$imagenes = array(
        1 => 'img/metargearsolid.jpg',
        2 => 'img/street-fighter.jpg',
        3 => 'img/hollowknight.jpg',
        4 => 'img/ww2.jpg'
    );
    

$result = mysqli_query($conn, $sql);
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
        <div class="div_top_tienda">
            <div class="usuario"> 
                <div class="user_img"></div>

                <?php
                if (isset($_SESSION['nickname'])) {
                    $nickname = $_SESSION['nickname'];
                    echo '<p>' . $nickname . '</p>';
                }
                ?>
            </div>
            <div class="cerrarsesion">
                <a href="Login.php"><button type="submit">Cerrar Sesión</button> </a>
            </div>
            OLIMPICSTORE
        </div>
        <div class="menu_tienda">
            <a href="inicio.php">INICIO</a>
            <a href="biblioteca.php" style="background-color: black; color: white;">BIBLIOTECA</a>
            <a href="tienda.php">TIENDA</a>
        </div>
        <div class="div_general">
            <div class="div_general_tienda"> <br>

                <?php
                if (isset($result) && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='juego'>";
                        echo "<p>ID del juego: " . $row["ID_juego"] . "</p>";
                        echo "<img src='" . $imagenes[$row["ID_juego"]] . "'class='imagen_juegos'> <br>";
                        echo "<b>" . $row["nombre"] . "</b><br>";
                        echo "<p>PEGI: " . $row["PEGI"] . "</p>";
                        //echo "<p>Descripción: " . $row["descripcion"] . "</p>";
                        echo "</div>";
                        echo "<hr>";
                    }
                } else {
                    echo "<p>No tienes juegos en tu biblioteca.</p>";
                }
                ?> 


            </div>
        </div>
        <div class="fondo_fijo">
            <h1>COMPRA CON TOTAL SEGURIDAD EN TU PAGINA WEB FAVORITA</h1>
        </div>
    </body>
    <footer>
        <div class="metodos_pago">
            <img src="img/paypal.png" alt="Método de pago 1">
            <img src="img/visa.png" alt="Método de pago 2">
            <img src="img/mastercard.png" alt="Método de pago 3">
            <img src="img/gpay.jpg" alt="Método de pago 5">
            <img src="img/applepay.jpg" alt="Método de pago 6">
        </div>
    </footer>
</html>
