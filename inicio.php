<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>OLIYMPIC STORE</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="div_top_tienda">
            <div class="usuario"> 
                <div class="user_img"></div>
                
                <?php
                session_start();
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
            <a href="inicio.php" style="background-color: black; color: white;">INICIO</a>
            <a href="biblioteca.php">BIBLIOTECA</a>
            <a href="tienda.php">TIENDA</a>
        </div>
        <div class="div_general">
            <div class="banner_ps"></div>
            <div class="div_general_inicio">
                <div class="div_juegos_tienda"><img src="img/cod.png" class="imagen_juegos"><b>COD WW2</b><br><p>29.99€</p></div>
                <div class="div_juegos_tienda"><img src="img/hollow.png" class="imagen_juegos"><b>Hollow Knight</b><br><p>29.99€</p></div>
                <div class="div_juegos_tienda"><img src="img/mgs.png" class="imagen_juegos"><b>Metal Gear Solid V</b><br><p>15.50€</p></div>
                <div class="div_juegos_tienda"><img src="img/sfv.png" class="imagen_juegos"><b>Street Fighter</b><br><p>19.99€</p></div>
            </div>
            <div class="banner_pc"></div>
            <div class="div_general_inicio">
                <div class="div_juegos_tienda"><img src="img/aitd.png" class="imagen_juegos"><b>Alone in the Dark</b><br><p>Proximamente</p></div>
                <div class="div_juegos_tienda"><img src="img/tloz.png" class="imagen_juegos"><b>The Legends of Zelda Tears of the kingdom</b><br><p>Proximamente</p></div>
                <div class="div_juegos_tienda"><img src="img/deadisland.png" class="imagen_juegos"><b>Dead Island 2</b><br><p>Proximamente</p></div>
                <div class="div_juegos_tienda"><img src="img/swjs.png" class="imagen_juegos"><b>Star Wars Jedi Survivor</b><br><p>Proximamente</p></div>
            </div>
            <div class="banner_zelda"></div>
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