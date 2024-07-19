<?php
/*// Conectar a la base de datos
require 'con_db.php';

// Seleccionar todas las contraseñas en texto plano
$query = "SELECT idUsuario, password FROM usuarios";
$result = mysqli_query($conex, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['idUsuario'];
        $plain_password = $row['password'];

        // Hashear la contraseña
        $hashed_password = password_hash($plain_password, PASSWORD_DEFAULT);

        // Actualizar la contraseña en la base de datos
        $update_query = "UPDATE usuarios SET password = '$hashed_password' WHERE idUsuario = $id";
        mysqli_query($conex, $update_query);
    }
    echo "Contraseñas hasheadas y actualizadas correctamente.";
} else {
    echo "Error al seleccionar las contraseñas: " . mysqli_error($conex);
}
*/

?>
