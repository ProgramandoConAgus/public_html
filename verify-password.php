<?php

    include('con_db.php');
    session_start();

    $oldpassword = $_POST['oldpassword'];
    $newpassword = $_POST['newpassword'];
    $confirmpassword = $_POST['confirmpassword'];
    if ($newpassword==$confirmpassword){
        $idUsuario=$_SESSION['IdUser'];
        $sql = "SELECT password FROM usuarios WHERE idUsuario=$idUsuario";
        $result = $conex->query($sql);
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $password = $row['password'];
        }
        if($oldpassword==$password){
            $sql = "UPDATE usuarios SET password=$newpassword WHERE idUsuario=$idUsuario";
            $stmt = $conex->prepare($sql);
            $stmt->execute();
            header('Location: panel-inicial.php?id=' . $idUsuario);
        }
        else {
            $_SESSION['error'] = 'La contraseña antigua es incorrecta';
            header('Location: change-password.php');
        }
    } 
    else {
        $_SESSION['error'] = 'Las nuevas contraseñas no coinciden';
        header('Location: change-password.php');
    }
    
?>