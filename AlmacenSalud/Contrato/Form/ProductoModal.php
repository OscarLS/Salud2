<input type="hidden" name="regresar" autocomplete="off" value="<?php echo $_GET["id"]; ?>">
<article class="alta">
	<table class="TablaP">
		<tr>
			<td class="lD"> Clave: </td> <!-- Clave -->
			<td class="lD"> Unidad: </td> <!-- Unidad -->
			<td class="lD"> Nombre: </td> <!-- Nombre -->
		</tr>
		<tr>
			<td> <input type="text" class="input_2" name="clave" id="claveProd" placeholder="  Ingrese Clave..." autocomplete="off"> </td> <!-- Clave -->
			<td>
				<select class="input_2" name="unidad" id="unidadProd" autocomplete="off">
					<!-- Unidad -->
				</select>
				<button type="button" class="BTA" id="btnUnidad">+</button>
			</td>
			<td> <input type="text" class="input_1" name="nombre" id="nombreProd" placeholder="  Ingrese Nombre..." autocomplete="off"> </td> <!-- Nombre -->
		</tr>
		<tr>
			<td colspan="3" class="lD"> Descripcion: </td> <!-- Descripcion -->
		</tr>
		<tr>
			<td colspan="3"> <textarea name="descripcion" id="descripcionProd" class="input_3" autocomplete="off"> </textarea> </td> <!-- Descripcion -->
		</tr>
		<tr>
			<td class="lD"> Categoria: </td> <!-- Categoria -->
			<td class="lD">
				<p id="titulo" style="display:none">N° de serie:</p>
			</td> <!-- N° de serie -->
		</tr>
		<tr>
			<td>
				<select class="input_2" name="categoria" id="categoriaProd" autocomplete="off">
					<!-- Categoria -->
				</select>
				<button type="button" class="BTA" id="btnCategoria">+</button>
			</td>
			<td> <input type="text" id="serieProd" style="display:none" class="input_2" name="serie" placeholder="  Ingrese Serie..." autocomplete="off"> </td> <!-- N° de serie -->
		</tr>
	</table>
	<input class="BTG" type="submit" id="btnRegProd" value="Guardar">
	