<?php
    session_start();
    include_once('../Conexion.php');
    $NOMBRE = $_POST['nombre'];
    $RFC = $_POST['rfc'];
    $TELEFONO = $_POST['telefono'];
    $CORREO = $_POST['correo'];
    $DIRECCION = $_POST['direccion'];
    $sql = "INSERT INTO proveedor (Nombre,Rfc,Telefono,Correo,Direccion) VALUES ('$NOMBRE','$RFC',
    '$TELEFONO','$CORREO','$DIRECCION')";  

    if (mysqli_query($conn, $sql)) {
        return true;
    } 
    else {
        return false ;
    }
    mysqli_close($conn);
?>