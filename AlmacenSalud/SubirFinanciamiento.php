<?php
    session_start();
    include_once('Conexion.php');
    $NOMBRE = $_POST['nombre'];
    $DESCRIPCION = $_POST['descripcion'];
    $sql = "INSERT INTO financiamiento (Nombre,Descripcion) VALUES ('$NOMBRE','$DESCRIPCION')";  
 
    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('Realizado con exito');</script>";
        echo "<script> location.href='Financiamiento.php';</script>"; 
    } 
    else {
        echo "<script> alert('Error');</script>";
        echo "<script> location.href='Financiamiento.php';</script>"; 
    }
    mysqli_close($conn);
?>