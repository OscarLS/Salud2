<?php
    session_start();
    include_once('Conexion.php');
    $LICITACION = $_POST['licitacion'];
    $sql = "INSERT INTO licitacion (Licitacion) VALUES ('$LICITACION')";  
 
    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('Realizado con exito');</script>";
        echo "<script> location.href='Licitacion.php';</script>"; 
    } 
    else {
        echo "<script> alert('Error');</script>";
        echo "<script> location.href='Licitacion.php';</script>"; 
    }
    mysqli_close($conn);
?>