<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Laboratorio Final, Validación de formulario y operaciones CRUD en la base de datos MySQL</title>
</head>
<body>
    <div class="container">
        <h2><em>Formulario de Registro</em></h2>
        <form method="POST" action="">

            <label for="nombre">Nombre<span><em>(requerido)</em></span></label>
            <input type="text" name="nombre" class="form-input" required>
            <label for="primerApellido">Primer Apellido<span><em>(requerido)</em></span></label>
            <input type="text" name="primerApellido" class="form-input" required>
            <label for="segundoApellido">Segundo Apellido<span><em>(requerido)</em></span></label>
            <input type="text" name="segundoApellido" class="form-input" required>
            <label for="email">Email<span><em>(requerido)</em></span></label>
            <input type="email" name="email" class="form-input" required>
            <label for="login">Login<span><em>(requerido)</em></span></label>
            <input type="text" name="login" class="form-input" required>
            <label for="password">Contraseña<span><em>(requerida)</em></span></label>
            <input type="password" name="password" class="form-input" minlength="4" maxlength="8" required>
            <input class="form-btn" name="enviar" type="submit" value="Enviar">

        </form> 

        <form action="consulta.php">
        <input class="consulta-btn" type="submit" value="Consulta">
    </form>

<?php

if ($_POST) {
    $nombre = $_POST['nombre'];
    $primerApellido = $_POST['primerApellido'];
    $segundoApellido = $_POST['segundoApellido'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    
    include("datos.php");
    // Para crear la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Para comprobar la conexión creamos un condicional
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Verificamos si el email ya está registrado
    $sql_check_email =  "SELECT * FROM usuarios WHERE email = '$email'";
    $result_check_email = $conn->query($sql_check_email);
    if ($result_check_email->num_rows > 0) {
        echo "El email ya está registrado. Por favor, utiliza otro email.";
    } else {
        // Encriptamos la contraseña para mayor seguridad
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // Creamos una 'query'
        $sql = "INSERT INTO usuarios (nombre, `primer apellido`, `segundo apellido`, email, login, password_hash)
                VALUES ('$nombre', '$primerApellido', '$segundoApellido', '$email', '$login', '$password_hash')";

        // Mensajes de registro correcto o incorrecto
        if ($conn->query($sql) === TRUE) {
            echo "Registro creado correctamente";
        } else {
            echo "Error al crear el registro" . $conn->error;
        }
    }

    // Siempre hay que cerrar la conexión a las bbdd, importante!
    $conn->close();
}

?>
<script src="script.js"></script>
</div>
</body>
</html>