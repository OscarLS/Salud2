<?php
    session_start();
    include_once('Conexion.php');
    $NOMBRE = $_POST['unidad'];
    $sql = "INSERT INTO unidadaplicativa (TipoUnidad) VALUES ('$NOMBRE')";  
 
    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('Realizado con exito');</script>";
        echo "<script> location.href='Unidad.php';</script>"; 
    } 
    else {
        echo "<script> alert('Error');</script>";
        echo "<script> location.href='Unidad.php';</script>"; 
    }
    mysqli_close($conn);
?>