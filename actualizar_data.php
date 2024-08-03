<?php
include ('con_db.php');
session_start();
if (!empty($_POST)) {
    $stmt = $conex->prepare("SELECT nombre, apellido, idSuscripcion, last_time_connected, idUsuario FROM `usuarios` WHERE IdTipoUsuario=1;");
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $idUsuario = $row['idUsuario'];
            
            // Verifica si el ID del usuario está presente en $_POST y obtiene su valor
            $isChecked = isset($_POST['usuarioid_' . $idUsuario]) ? $_POST['usuarioid_' . $idUsuario] : 0;
            
            if ($isChecked == 0) {
                $stmt = $conex->prepare("UPDATE `usuarios` SET `idSuscripcion` = 0 WHERE idUsuario = ?");
                $stmt->bind_param("i", $idUsuario);
                $stmt->execute();
                
            } else if ($isChecked == 1) {
                $stmt = $conex->prepare("UPDATE `usuarios` SET `idSuscripcion` = 1 WHERE idUsuario = ?");
                $stmt->bind_param("i", $idUsuario);
                $stmt->execute();
            }
        }
        $_SESSION['notificacion'] = "Consulta Completada";
        header('Location: options.php');
    } else {
        $_SESSION['notificacion'] = "Error al ejecutar la consulta.";
        header('Location: options.php');
    }
} else {
    $_SESSION['notificacion'] = "No se enviaron datos.";
    header('Location: options.php');
}
?>
