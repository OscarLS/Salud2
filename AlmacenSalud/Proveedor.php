<?php
    session_start();
    include_once('Conexion.php');
    $id = $_SESSION['id'];
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['ap'];
    if(!isset($id,$nombre,$apellido)){
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PROVEEDOR</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta charset="utf-8"> <!-- Caracter especial -->
		<link rel="stylesheet" href="estilos/styleSeccionesCatalogo.css">
		<link rel="shortcut icon" href="Img/Almacen.png">
		<script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="js/BusquedaProveedor.js"></script>
		<script src="Alert.js"></script>   
	</head>
<body> <!-- Cuerpo -->
	<div class="contenedor"> 
		<header class="cabecera"> <!-- Cabecera -->
			<h3>Proveedor</h3>
		</header>
		<main class="cuerpoUp"> <!-- Contenedor -->
			<form action="SubirProveedor.php" method="post" name="Alta">
            <article class="alta">
            	<table class="TablaP"> 
					<tr> 
						<td class="lD"> Nombre: </td> <!-- Nombre -->
						<td class="lD"> Rfc: </td>  <!-- Rfc -->
					</tr>
					<tr> 
						<td> <input type="text" class="input_1" name="nombre" id="nombre" placeholder="  Ingrese Nombre..." autocomplete="off"> </td> <!-- Nombre -->
						<td> <input type="text" class="input_2" name="rfc" id="rfc" placeholder="  Ingrese Rfc..." autocomplete="off"> </td> <!-- Rfc -->
					</tr>
					<tr> 
						<td class="lD" > Telefono: </td> <!-- Telefono -->
						<td class="lD"> Correo: </td> <!-- Correo -->
					</tr>
					<tr> 
						<td> <input type="text" class="input_1" name="telefono" id="telefono" placeholder="  Ingrese Telefono..." autocomplete="off"> </td> <!-- Telefono -->
						<td> <input type="text" class="input_2" name="correo" id="correo" placeholder="  Ingrese Correo..." autocomplete="off" > </td> <!-- Correo -->
					</tr>
					<tr> 
						<td class="lD"> Direccion: </td> <!-- Direccion -->
					</tr>
					<tr> 
						<td colspan="2"> <input type="text" class="input_6" name="direccion" id="direccion" placeholder="  Ingrese Direccion..." autocomplete="off"> </td> <!-- Direccion -->
					</tr>
				</table>
				<input class="BTG" type="submit" value="Guardar">
			</form>
            </article>
		</main>
		<div class="CuerpoDown">
			<div class="buscador">
                <input type="text" name="busqueda" id="busqueda" class="btn_buscar" placeholder="  Buscar..." autocomplete="off">
                <a href="<?php echo $_GET["id"]; ?>.php" class="btn_regresar">Regresar</a>
            </div>
			<section id="tabla_resultado">
                <!-- Aqui se muestra la tabla -->
            </section>
		</div>
	</div>
</body>
</html>

