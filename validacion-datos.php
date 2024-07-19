<?php
include('con_db.php');

if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['password'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consultar la base de datos para obtener el registro del usuario
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conex->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result) {
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verificar que el nombre y apellido coincidan
            if ($user['nombre'] == $nombre && $user['apellido'] == $apellido) {
                // Verificar la contraseña
                if (password_verify($password, $user['password'])) {
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['IdUser'] = $user['idUsuario']; // Asegúrate de que el nombre de la columna de ID sea correcto
                    header('Location: panel-inicial.php?id=' . $user['idUsuario']);
                    exit();
                } else {
                    echo "Contraseña incorrecta.";
                }
            } else {
                echo "Nombre o apellido incorrecto.";
            }
        } else {
            echo "Usuario no encontrado.";
            header('Location: usuario-no-encontrado.php');
            exit();
        }
    } else {
        echo "Error en la consulta: " . $conex->error . "<br>";
    }

    $stmt->close();
} else {
    echo "Todos los campos son requeridos.";
}
?>
