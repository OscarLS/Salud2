<?php
    session_start();
    include_once('Conexion.php');
    $ID = $_GET['id'];
    $sql = "DELETE FROM proveedor WHERE Id='$ID'";  
 
    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('Realizado con exito);</script>";
        echo "<script> location.href='Proveedor.php';</script>"; 
    } 
    else {
        echo "<script> alert('Error');</script>";
        echo "<script> location.href='Proveedor.php';</script>"; 
    }
    mysqli_close($conn);
?>