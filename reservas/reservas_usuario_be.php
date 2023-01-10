<?php

include 'conexion_reservas_be.php';

$usuario = $_POST['usuario'];
$actividad = $_POST['actividad'];
$nivel = $_POST['nivel'];
$numero_personas = $_POST['numero_personas'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];

$query = "INSERT INTO rutes_clases (usuario, actividad, nivel, numero_personas, fecha, hora) 
                VALUES ('$usuario', '$actividad', '$nivel', '$numero_personas', '$fecha', '$hora')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
                    <script>
                        alert("Usuario registrado correctamente");
                        window.location = "../tusesion.html";            
                    </script>
                ';
} else {
    echo '
                <script>
                    alert("Usuario no registrado. Inténtalo de nuevo.");
                    window.location = "login.php";            
                </script>
            ';
}

mysqli_close($conexion);

?>