<?php

session_start();


if (!isset($_SESSION['usuario'])) {
    echo '
             <script>
                alert("Por favor, inicie sesión"); 
                window.location = "../login/login.php";           
            </script>
        ';
    session_destroy();
    die();

}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    <link rel="stylesheet" type="text/css" href="../footer.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../normalize.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../typography.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../header.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="reservas.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../banner.css" media="screen" />

<body>
    <header>
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <div class="link">
                <img src="../imagenes/logo.png" alt="logo" class="logo">
            </div>
            <ul>
                <li><a href="../sesioniniciada.html">Inicio</a></li>
                <li><a href="../sobrenosotrosiniciada.html">Sobre nosotros</a></li>
                <li><a href="../actividadesiniciada.html">actividades</a></li>
                <li><a href="../contacto/contacte.html">Contacto</a></li>
                <li><a href="../tusesion.html">Tu cuenta</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <div class="banner">
            <img class="banner-image-photo" alt="logo" src="../imagenes/quisom.jpg">
        </div>
    </section>
    <h2>RESERVA</h2>
    <form action="reservas_usuario_be.php" method="POST" class="formulario__reservas">
        <input type="text" placeholder="Usuario" name="usuario">
        <input type="text" placeholder="Ruta o Clase" name="actividad">
        <input type="text" placeholder="Nivel" name="nivel">
        <input type="text" placeholder="Número de personas" name="numero_personas">
        <input type="date" placeholder="Fecha" name="fecha">
        <input type="time" placeholder="Hora" name="hora" min="09:00" max="20:00" step="3600">
        <button>Reservar</button>
    </form>
    <footer>
        <div class="agrupate-content">
            <div class="contact-data">
                <br>
                <div class="contact-data-title">
                    <h3>Contacto</h3>
                </div>
                <div class="contact-data-content">
                    <p><b>Dirección: </b>C/ del Pont N 5 ( la Rierada ), 08750</p>
                    <p>Molins de Rei - Barcelona - Espanya</p>
                    <p><b>Teléfono:</b> (+34) 936 68 36 15</p>
                    <p><b>Email:</b> naturehorse@gmail.com</p>
                </div>
            </div>

            <div class="social-data">
                <br>
                <div class="social-data-title">
                    <h3>Social</h3>
                </div>
                <div class="social-data-content">
                    <a href="https://www.instagram.com/"><img class="image-instagram-photo" alt="image-instagram"
                            src="../imagenes/instagram.png"></a>
                </div>
                <div class="social-data-content">
                    <a href="https://www.facebook.com/"><img class="image-instagram-photo" alt="image-instagram"
                            src="../imagenes/facebook.png"></a>
                </div>
                <div class="social-data-content">
                    <a href="https://wa.me/630426517?text=Me%20interesa%20el%20servicio"><img
                            class="image-instagram-photo" alt="image-instagram"
                            src="../imagenes/whatsapp-icon-png-13.png"></a>
                </div>
            </div>
        </div>
        <div class="legal-data">
            <br>
            <div class="legal-data-content">
                <p>Termes i Condicions - Avís legal - Política de Privacitat - Política de Cookies</p>
            </div>
        </div>
        <br>
    </footer>
</body>

</html>