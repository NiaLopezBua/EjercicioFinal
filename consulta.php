<?php

include("datos.php");

// Para crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Para comprobar la conexión creamos un condicional
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Consulta de los registros 
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Registros:</h2>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Email</th><th>Primer Apellido</th><th>Segundo Apellido</th><th>Login</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['ID'] . "</td><td>" . $row['NOMBRE'] . "</td><td>" . $row['EMAIL'] . "</td><td>" . $row['PRIMER APELLIDO'] . "</td><td>" . $row['SEGUNDO APELLIDO'] . "</td><td>" . $row['LOGIN'] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron registros.";
}

$conn->close();

?>
