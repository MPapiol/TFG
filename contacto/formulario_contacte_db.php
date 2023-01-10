<?php

include 'conexion_formulario_contacto_be.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$query = "INSERT INTO dades (nombre, email, telefono, mensaje) 
                VALUES ('$nombre', '$email', '$telefono', '$mensaje')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
                    <script>
                        alert("Información registrada correctamente");
                        window.location = "../index.html";            
                    </script>
                ';
} else {
    echo '
                <script>
                    alert("Algun campo està incorrecto");
                    window.location = "contacte.html";            
                </script>
            ';
}

mysqli_close($conexion);

?>