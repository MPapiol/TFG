<?php

include 'conexion_be.php';


$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

//Encriptado de contraseña
/*$contrasena = hash('sha512', $contrasena);*/

$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena) 
                VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";

//Verificar que no se repitan datos
//Verificar correo
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
            <script>
                alert("Este correo ya esta registrado. Inicia sesión"); 
                window.location = "login.php";           
            </script> 
        ';
    exit();
}

//Verificar usuario
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
            <script>
                alert("Este nombre de usuario ya esta registrado. Modificalo, o inicia sesión"); 
                window.location = "login.php";           
            </script> 
        ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
                    <script>
                        alert("Usuario registrado correctamente");
                        window.location = "login.php";            
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