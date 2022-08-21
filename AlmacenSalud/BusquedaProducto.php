<?php 

	include_once('Conexion.php');

	$tabla="";
	$query="SELECT * FROM producto ORDER BY Id";

	if(isset($_POST['producto']))
	{
		$q=$conn->real_escape_string($_POST['producto']);
		$query="SELECT * FROM producto WHERE Clave LIKE '%".$q."%' OR Nombre LIKE '%".$q."%' OR Unidad LIKE '%".$q."%' OR Categoria LIKE '%".$q."%' ";
	}

	$buscar=$conn->query($query);
	if ($buscar->num_rows > 0){
		$tabla.= 
		'<table class="Tabla">
		<tr>
			<td class="titulo" colspan="7"> Lista de productos </td>
		</tr>
		<tr>
			<th> Clave </th>
            <th> Nombre </th>
            <th> Descripcion </th>
			<th> Unidad </th>
			<th> Categoria </th>
            <th> Modificar </th>
            <th> Elminar </th>
		</tr>';

		while($mostrar= $buscar->fetch_assoc())
		{
			$tabla.=
			'<tr>
                <td class="Lista" >'.$mostrar['Clave'].'</td>
                <td class="Lista" >'.$mostrar['Nombre'].'</td>
                <td class="Lista" >'.$mostrar['Descripcion'].'</td>
                <td class="Lista" >'.$mostrar['UnidadAplicativa'].'</td>
                <td class="Lista" >'.$mostrar['Categoria'].'</td>
				<td class="Lista" >'.'<a class="ME" href="ModificarProducto.php?id='.$mostrar['Id'].'">MODIFICAR</a>'.'</td>
				<td class="Lista" >'.'<a class="ME" onclick="return ConfirmarDelete()" href="EliminarProducto.php?id='.$mostrar['Id'].'">ELIMINAR</a>'.'</td>
			</tr>
			';
		}
		$tabla.='</table>';
	} else {
			$tabla="NO SE ENCONTRARON COINCIDENCIAS";
		}

	echo $tabla;
?>