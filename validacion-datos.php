<?php

include('con_db.php');

if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios";
    $result = $conex->query($sql);

    if ($result) {
        echo "Consulta ejecutada correctamente<br>";
    } else {
        echo "Error en la consulta: " . $conex->error . "<br>";
    }

    $filas = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $filas[] = $row;
        }
    } else {
        echo "0 resultados<br>";
    }

    $mensajeDevolucion = "No funcionó";
    for ($i = 0; $i < count($filas); $i++) {
        if ($filas[$i]['email'] == $email && $filas[$i]['nombre'] == $nombre) {
            if ($password == $filas[$i]['password']) {
                $mensajeDevolucion = "Se ingresó correctamente";
                $userId = $filas[$i]['idUsuario'];  // Asumiendo que 'id' es el nombre de la columna del ID del usuario en la base de datos
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['IdUser']=$filas[$i]['idUsuario'];
                header('Location: panel-inicial.php?id=' . $userId);
                exit(); // Asegúrate de llamar a exit() después de redirigir para detener la ejecución del script
            }
        }else{
            header('Location: usuario-no-encontrado.php');
        }
    }

    // Si llega aquí, las credenciales no coinciden
    echo $mensajeDevolucion;
} else {
    echo "";
}
?>

