<?php
    session_start();
    include_once('Conexion.php');
    $ID = $_POST['id'];
    $NOMBRE = $_POST['nombre'];
    $DIRECCION = $_POST['direccion'];
    $JURISDICCION = $_POST['jurisdiccion'];
    $sql = "UPDATE centro SET Nombre='$NOMBRE',Direccion='$DIRECCION',Jurisdiccion='$JURISDICCION' WHERE Id = $ID";  
 
    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('Realizado con exito');</script>";
        echo "<script> location.href='Centro.php';</script>"; 
    } else {
        echo "<script> alert('Error');</script>";
        echo "<script> location.href='Centro.php';</script>"; 
    }
    mysqli_close($conn);
?>