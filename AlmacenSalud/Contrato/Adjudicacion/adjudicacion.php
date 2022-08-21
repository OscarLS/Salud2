<?php
session_start();
include_once('../../Conexion.php');
$id = $_SESSION['id'];
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['ap'];
if (!isset($id, $nombre, $apellido)) {
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>CONTRATO</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta charset="utf-8"> <!-- Caracter especial -->
  <link rel="stylesheet" href="../../estilos/styleContrato.css">
  <link rel="stylesheet" href="../../estilos/select2.css">
  <link rel="shortcut icon" href="../../Img/Almacen.png">
  <link rel="stylesheet" href="../../estilos/styleModal.css">

  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="../../Alert.js"></script>

  <script src="../../js/select2.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#producto').select2();
      $('#financiamiento').select2();
      $('#partida').select2();
      $('#programa').select2();
      $('#unidad').select2();
      $('#proveedor').select2();
    });
  </script>

</head>

<body>
  <!-- Cuerpo -->
  <div class="contenedor">
    <header class="cabecera">
      <!-- Cabecera -->
      <h3>Adjudicacion Directa
      </h3>
    </header>
    <main class="cuerpoUp">
      <!-- Contenedor -->
      <form>
        <article class="alta-contrato">
          <table class="TablaP">
            <tr>
              <!-- Titulo (Contrato,Fecha,Financiamiento) -->
              <td class="lD"> Contrato: </td> <!-- Nombre -->
              <td class="lD"> Fecha: </td> <!-- Fecha -->
              <td class="lD"> Fuente de financiamiento: </td> <!-- Financiamiento -->
            </tr>
            <tr>
              <!-- Entrada (Contrato,Fecha,Financiamiento) -->
              <td class="celda"> <input type="text" class="input_1" name="contrato" id="contrato" placeholder="  Ingrese Contrato..." autocomplete="off"> </td> <!-- Contrato -->
              <td class="celda"> <input type="date" class="input_1" name="fecha" id="fecha"> </td> <!-- Fecha -->
              <td class="celda">
                <select class="input_1" name="financiamiento" id="financiamiento" autocomplete="off">

                </select>
                <button type="button" class="BTA" id="btnFF">+</button>
              </td>
            </tr>
            <tr>
              <!-- Titulo (Partida,Programa,Unidad Aplicativa) -->
              <td class="lD"> Partida: </td> <!-- Partida -->
              <td class="lD"> Programa: </td> <!-- Programa -->
              <td class="lD"> Unidad Aplicativa: </td> <!-- Unidad Aplicativa -->
            </tr>
            <tr>
              <!-- Entrada (Partida,Programa,Unidad) -->
              <td class="celda">
                <select class="input_1" name="partida" id="partida" autocomplete="off">

                </select>
                <button type="button" class="BTA" id="btnPartida">+</button>
              </td>
              <td class="celda">
                <select class="input_1" name="programa" id="programa" autocomplete="off">

                </select>
                <button type="button" class="BTA" id="btnPrograma">+</button>
              </td>
              <td class="celda">
                <select class="input_1" name="unidad" id="unidad" autocomplete="off">

                </select>
                <button type="button" class="BTA" id="btnUnidadA">+</button>
              </td>
            </tr>
            <tr>
              <!-- Titulo (Proveedor,Iva) -->
              <td class="lD"> Proveedor: </td> <!-- Proveedor -->
              <td class="lD"> Iva: </td> <!-- Iva -->
            </tr>
            <tr>
              <!-- Entrada (Proveedor,Iva) -->
              <td class="celda">
                <select class="input_1" name="proveedor" id="proveedor" autocomplete="off">

                </select>
                <button type="button" class="BTA" id="btnProvedor">+</button>
              </td>
              <td class="celda"> <input type="text" class="input_2" name="iva" id="iva" placeholder="  Iva" autocomplete="off"> </td> <!-- Iva -->
            </tr>
          </table>
        </article>
        <article class="alta-contrato">
          <h2>Busqueda de articulos</h2>
          <table class="TablaP">
            <tr>
              <!-- Titulo (Articulo,Nombre,Unidad) -->
              <td class="lD"> Buscar Articulo: </td> <!-- Articulo -->
              <td class="lD"> Nombre: </td> <!-- Nombre -->
              <td class="lD"> Unidad: </td> <!-- Unidad -->
            </tr>
            <tr>
              <!-- Entrada (Articulo,Nombre,Unidad) -->
              <td class="celda" id="clave">
                <select class="input_1" name="producto" id="producto">
                  <!-- Articulo -->
                </select>
                <button type="button" class="BTA" id="btnProducto">+</button>
              </td>
              <td class="celda" id="product"> <input type="text" class="input_1_show" name="nombre" id="nombre"> </td> <!-- Nombre -->
              <td class="celda" id="unit"> <input type="text" class="input_1_show" name="tipounidad" id="tipounidad" readonly> </td> <!-- Unidad -->
            </tr>
            <tr>
              <!-- Titulo (Descripcion) -->
              <td colspan="3" class="lD"> Descripcion: </td> <!-- Descripcion -->
            </tr>
            <tr>
              <!-- Entrada (Descripcion) -->
              <td class="celda" id="explicacion" colspan="3"> <textarea name="descripcion" id="descripcion" class="input_3" readonly> </textarea> </td> <!-- Descripcion -->
            </tr>
            <tr>
              <!-- Titulo (Precio,Cantidad,Indice) -->
              <td class="lD"> Precio Unitario: </td> <!-- Precio -->
              <td class="lD"> Cantidad: </td> <!-- Cantidad -->
              <td class="lD"> Indice: </td> <!-- Indice -->
            </tr>
            <tr>
              <!-- Entrada (Precio,Cantidad,Indice) -->
              <td class="celda"> <input type="text" class="input_1" name="precio" id="precio" placeholder="  Ingrese Precio Unitario" autocomplete="off"> </td> <!-- Precio -->
              <td class="celda"> <input type="number" class="input_1" name="cantidad" id="cantidad" placeholder="  Ingrese Cantidad" autocomplete="off"> </td> <!-- Cantidad -->
              <td class="celda"> <input type="text" class="input_1" name="indice" id="indice" placeholder="  Ingrese Indice" autocomplete="off"> </td> <!-- Cantidad -->
            </tr>
          </table>
          <div class="botones">
            <button type="reset" class="BTG" id="boton" onclick="capturar();">Agregar</button>
            <a href="../../Proceso.php" class="BTG">Regresar</a>
          </div>
        </article>
      </form>
      <div class="CuerpoDown">
        <table class="alta-Articulo">
          <thead>
            <tr>
              <th>Clave</th>
              <th>Indice</th>
              <th>Nombre</th>
              <th>Descripcion</th>
              <th>Unidad</th>
              <th>P.U</th>
              <th>Cantidad</th>
              <th>Importe</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody id="show-datos">

          </tbody>
          <tfoot>
            <tr>
              <td class="show-total" colspan="3">
                <p class="sub-total">SUBTOTAL</p>
              </td>
              <td class="show-total" colspan="3">
                <p class="iva">IVA</p>
              </td>
              <td class="show-total" colspan="3">
                <p class="total">TOTAL</p>
              </td>
            </tr>
          </tfoot>
        </table>
      </div>

      <div class="botones">
        <button type="reset" class="BTG" id="boton" onclick="adquirir();">Adquirir</button>

      </div>

      <!--Modal -->
      <div class="modal-container" id="modal_container_Partida">
        <div class="modal">
          <div class="contenedor">
            <header class="cabecera">
              <!-- Cabecera -->
              <h3>Partida presupuestal</h3>
            </header>
            <main class="cuerpoUp">
              <!-- Contenedor -->
              <form id="partidaPre" name="Alta">
                <article class="alta">
                  <table class="TablaP">
                    <tr>
                      <td> Clave federal: </td> <!-- Clave -->
                      <td> Nombre: </td> <!-- Nombre -->
                    </tr>
                    <tr>
                      <td> <input type="text" class="input_2" id="claveP" name="clave" placeholder="  Ingrese Clave..." autocomplete="off"> </td> <!-- Clave -->
                      <td> <input type="text" class="input_1" id="nombreP" name="nombre" placeholder="  Ingrese Nombre..." autocomplete="off"> </td> <!-- Nombre -->
                    </tr>
                  </table>

                  <input class="BTG" type="submit" id="btnRegistroPartida" value="Guardar">
              </form>
              </article>
            </main>
          </div>
          <button class="BTG" id="btnPartidaClose">Cancelar</button>
        </div>
      </div>

      <div class="modal-container" id="modal_container_FF">
        <div class="modal">
          <div class="contenedor">
            <header class="cabecera">
              <!-- Cabecera -->
              <h3>Financiamiento</h3>
            </header>
            <main class="cuerpoUp">
              <!-- Contenedor -->
              <form id="formFinan" method="post" name="Alta">
                <article class="alta">
                  <table class="TablaP">
                    <tr>
                      <td class="lD"> Nombre: </td> <!-- Nombre -->
                      <td class="lD"> Descripcion: (opcional) </td> <!-- Descripcion -->
                    </tr>
                    <tr>
                      <td> <input type="text" class="input_1" id="nombreFF" name="nombreFF" placeholder="  Ingrese Nombre..." autocomplete="off"> </td> <!-- Nombre -->
                      <td> <textarea name="descripcionFF" id="descripcionFF" class="input_5" autocomplete="off"></textarea> </td> <!-- Descripcion -->
                    </tr>
                  </table>
                  <input class="BTG" type="submit" id="btnRegFinan" value="Guardar">
              </form>
              </article>
            </main>
          </div>
          <button class="BTG" id="btnFFClose">Cancelar</button>
        </div>
      </div>


      <div class="modal-container" id="modal_container_Programa">
        <div class="modal">
          <div class="contenedor">
            <header class="cabecera">
              <!-- Cabecera -->
              <h3>Programa</h3>
            </header>
            <main class="cuerpoUp">
              <!-- Contenedor -->
              <form id="formPrograma" method="post" name="Alta">
                <article class="alta">
                  <table class="TablaP">
                    <tr>
                      <td class="lD"> Nombre: </td> <!-- Nombre -->
                    </tr>
                    <tr>
                      <td> <input type="text" id="nombreProg" class="input_1" name="nombre" placeholder="  Ingrese Nombre..." autocomplete="off"> </td> <!-- Nombre -->
                    </tr>
                  </table>
                  <input class="BTG" id="btnRegProg" type="submit" value="Guardar">
              </form>
              </article>
            </main>
          </div>
          <button class="BTG" id="btnProgramaClose">Cancelar</button>
        </div>
      </div>

      <div class="modal-container" id="modal_container_UnidadA">
        <div class="modal">
          <div class="contenedor">
            <header class="cabecera">
              <!-- Cabecera -->
              <h3>Centros</h3>
            </header>
            <main class="cuerpoUp">
              <!-- Contenedor -->
              <form id="formCentro" method="post" name="Alta">
                <article class="alta">
                  <table class="TablaP">
                    <tr>
                      <!-- Nombre -->
                      <td class="lD"> Nombre: </td> <!-- Nombre -->
                      <td class="lD"> Direccion: </td> <!-- Direccion -->
                      <td class="lD"> Jurisdiccion: </td> <!-- Jurisdiccions -->
                    </tr>
                    <tr>
                      <td> <input type="text" class="input_2" id="nombreCentro" name="nombre" placeholder="  Ingrese Nombre..." autocomplete="off"> </td> <!-- Nombre -->
                      <td> <input type="text" class="input_1" name="direccion" placeholder="  Ingrese Direccion..." id="direccionCentro" autocomplete="off"> </td> <!-- Direccion -->
                      <td> <select name="jurisdiccion" id="jurisdiccion" class="input_2">
                          <option value="----">--Seleccion jurisdiccion--</option>
                          <option value="Valles centrales">Valles centrales</option>
                          <option value="Itsmo">Itsmo</option>
                          <option value="Tuxtepec">Tuxtepec</option>
                          <option value="Costa">Costa</option>
                          <option value="Mixteca">Mixteca</option>
                          <option value="Sierra">Sierra</option>
                        </select>
                      </td> <!-- Jurisdiccions -->
                    </tr>
                  </table>
                  <input class="BTG" type="submit" id="btnRegCentro" value="Guardar">
              </form>
              </article>
            </main>
          </div>
          <button class="BTG" id="btnUnidadAClose">Cancelar</button>
        </div>
      </div>

      <div class="modal-container" id="modal_container_Provedor">
        <div class="modal">
          <div class="contenedor">
            <header class="cabecera">
              <!-- Cabecera -->
              <h3>Proveedor</h3>
            </header>
            <main class="cuerpoUp">
              <!-- Contenedor -->
              <form id="formProv" method="post" name="Alta">
                <article class="alta">
                  <table class="TablaP">
                    <tr>
                      <td class="lD"> Nombre: </td> <!-- Nombre -->
                      <td class="lD"> Rfc: </td> <!-- Rfc -->
                    </tr>
                    <tr>
                      <td> <input type="text" class="input_1" name="nombre" id="nombreProv" placeholder="  Ingrese Nombre..." autocomplete="off"> </td> <!-- Nombre -->
                      <td> <input type="text" class="input_2" name="rfc" id="rfcProv" placeholder="  Ingrese Rfc..." autocomplete="off"> </td> <!-- Rfc -->
                    </tr>
                    <tr>
                      <td class="lD"> Telefono: </td> <!-- Telefono -->
                      <td class="lD"> Correo: </td> <!-- Correo -->
                    </tr>
                    <tr>
                      <td> <input type="text" class="input_1" name="telefono" id="telefonoProv" placeholder="  Ingrese Telefono..." autocomplete="off"> </td> <!-- Telefono -->
                      <td> <input type="text" class="input_2" name="correo" id="correoProv" placeholder="  Ingrese Correo..." autocomplete="off"> </td> <!-- Correo -->
                    </tr>
                    <tr>
                      <td class="lD"> Direccion: </td> <!-- Direccion -->
                    </tr>
                    <tr>
                      <td colspan="2"> <input type="text" class="input_6" name="direccion" id="direccionProv" placeholder="  Ingrese Direccion..." autocomplete="off"> </td> <!-- Direccion -->
                    </tr>
                  </table>
                  <input class="BTG" type="submit" id="btnRegProv" value="Guardar">
              </form>
              </article>
            </main>
          </div>
          <button class="BTG" id="btnProvedorClose">Cancelar</button>
        </div>
      </div>

      <div class="modal-container" id="modal_container_Producto">
        <div class="modal">
          <div class="contenedor">
            <header class="cabecera">
              <!-- Cabecera -->
              <h3>Productos</h3>
              <div>
                <b> Mostrar N° de serie </b>
                <input type="checkbox" class="box" id="show" name="show" onclick="mostrar_ocultar()">
              </div>
            </header>
            <main class="cuerpoUp">
              <!-- Contenedor -->
              <form id="formProduc" method="post" name="Alta">
                <?php
                include('../Form/ProductoModal.php');
                ?>
              </form>
              </article>
            </main>
          </div>

          <button class="BTG" id="btnProductoClose">Cancelar</button>
        </div>
      </div>

      <div class="modal-container" id="modal_container_Unidad">
        <div class="modal">
          <div class="contenedor">
            <header class="cabecera">
              <!-- Cabecera -->
              <h3>Unidad</h3>
            </header>
            <main class="cuerpoUp">
              <!-- Contenedor -->
              <form id="formUnidad2" method="post" name="Alta">
                <article class="alta">
                  <table class="TablaP">
                    <tr>
                      <td class="lD"> Unidad: </td> <!-- Nombre -->
                    </tr>
                    <tr>
                      <td> <input type="text" class="input_1" id="unidadPro2" name="unidad" placeholder="  Ingrese Unidad..." autocomplete="off"> </td> <!-- Nombre -->
                    </tr>
                  </table>
                  <input class="BTG" type="submit" id="btnRegUniPro" value="Guardar">
              </form>
              </article>
            </main>
          </div>
          <button class="BTG" id="btnUnidadClose">Cancelar</button>
        </div>
      </div>

      <div class="modal-container" id="modal_container_Categoria">
        <div class="modal">
          <div class="contenedor">
            <header class="cabecera">
              <!-- Cabecera -->
              <h3>Categoria</h3>
            </header>
            <main class="cuerpoUp">
              <!-- Contenedor -->
              <form id="formCategoriaProd" method="post" name="Alta">
                <article class="alta">
                  <table class="TablaP">
                    <tr>
                      <td class="lD"> Categoria: </td> <!-- Nombre -->
                    </tr>
                    <tr>
                      <td> <input type="text" class="input_1" id="categoriaProd2" name="categoria" placeholder="  Ingrese Categoria..." autocomplete="off"> </td> <!-- Nombre -->
                    </tr>
                  </table>
                  <input class="BTG" type="submit" id="btnRegCategoriaPro" value="Guardar">
              </form>
              </article>
            </main>
          </div>
          <button class="BTG" id="btnCategoriaClose">Cancelar</button>
        </div>
      </div>
    </main>
  </div>
</body>

</html>

<script>
  function capturar() {
    function Datos(contrato, fecha, financiamiento, partida, programa, unidad, proveedor, iva,
      clave, nombre, tipo, descripcion, precio, cantidad, indice, importe) {
      this.contrato = contrato;
      this.fecha = fecha;
      this.financiamiento = financiamiento;
      this.partida = partida;
      this.programa = programa;
      this.unidad = unidad;
      this.proveedor = proveedor;
      this.iva = iva;
      this.clave = clave;
      this.nombre = nombre;
      this.tipo = tipo;
      this.descripcion = descripcion;
      this.precio = precio;
      this.cantidad = cantidad;
      this.indice = indice;
      this.importe = importe;
    }
    var contratoCaptura = document.getElementById("contrato").value;
    var fechaCaptura = document.getElementById("fecha").value;
    var financiamientoCaptura = document.getElementById("financiamiento").value;
    var partidaCaptura = document.getElementById("partida").value;
    var programaCaptura = document.getElementById("programa").value;
    var unidadCaptura = document.getElementById("tipounidad").value;
    var proveedorCaptura = document.getElementById("proveedor").value;
    var ivaCaptura = document.getElementById("iva").value;
    var producto = document.getElementById("producto");
    var claveCaptura = producto.options[producto.selectedIndex].text;
    var nombreCaptura = document.getElementById("nombre").value;
    var tipoCaptura = document.getElementById("tipounidad").value;
    var descripcionCaptura = document.getElementById("descripcion").value;
    var precioCaptura = document.getElementById("precio").value;
    var cantidadCaptura = document.getElementById("cantidad").value;
    var importeCaptura = parseFloat(precioCaptura * cantidadCaptura);
    var indiceCaptura = document.getElementById("indice").value;
    total = new Datos(contratoCaptura, fechaCaptura, financiamientoCaptura, partidaCaptura, programaCaptura,
      unidadCaptura, proveedorCaptura, ivaCaptura, claveCaptura, nombreCaptura, tipoCaptura, descripcionCaptura, precioCaptura,
      cantidadCaptura, indiceCaptura, importeCaptura);
    agregar();

  }
  var base = [];

  

  function agregar() {

    base.push(total);
    i = base.indexOf(total);
    document.getElementById("show-datos").innerHTML += '<tr><td class="show">' + total.clave + '</td><td class="show">' +
      total.indice + '</td><td class="show">' + total.nombre + '</td><td class="show">' + total.descripcion + '</td><td class="show">' + total.unidad + '</td><td class="show">' +
      total.precio + '</td><td class="show">' + total.cantidad + '</td><td class="show">' + total.importe + '</td><td class="show"><img class="eliminar" src="../../img/eliminar.png" onclick="eliminar(' + i + ');"></td><tr>'
  }

  function eliminar(i) {
    base.splice(i, 1);
    document.getElementById("show-datos").innerHTML = '';
    for (var j = 0; j < base.length; j++) {
      document.getElementById("show-datos").innerHTML += '<tr><td class="show">' + base[j].clave + '</td><td class="show">' +
        base[j].indice + '</td><td class="show">' + base[j].nombre + '</td><td class="show">' + base[j].descripcion + '</td><td class="show">' + base[j].unidad + '</td><td class="show">' +
        base[j].precio + '</td><td class="show">' + base[j].cantidad + '</td><td class="show">' + base[j].importe + '</td><td class="show"><img class="eliminar" src="../../Img/eliminar.png" onclick="eliminar(' + j + ');"></td><tr>'
      console.log(base[j].clave);
    }

  }

  function adquirir() {
    var reply = confirm("¿Seguro que desea guardar?")
    if (reply == true) {
      for (var j = 0; j < base.length; j++) {
    
  var Doct = "adjudicacion"; 
  var Contrato = base[j].indice; 
  var Pedido=""; 
  var Financiamiento= base[j].financiamiento; 
  var Partida=base[j].partida; 
  var Programa=base[j].programa; 
  var Licitacion=""; 
  var Proveedor=base[j].proveedor; 
  var Fecha=base[j].fecha; 
  var Clave=base[j].clave; 
  var Nombre=base[j].nombre; 
  var Descripcion=base[j].descripcion; 
  var Unidad=base[j].unidad; 
  var Precio=base[j].precio; 
  var Cantidad=base[j].cantidad; 
  var Iva=base[j].iva; 
  var Importe=base[j].importe; 
  var Existencia =base[j].cantidad ;

        $.ajax({
          url: "../../database/SubirContrato.php",
          type: "POST",
          cache: false,
          data: {
            Doct:Doct,
            Contrato:Contrato,
            Pedido :Pedido,
            Financiamiento:Financiamiento,
            Partida:Partida,
            Programa:Programa,
            Licitacion:Licitacion,
            Proveedor:Proveedor,
            Fecha:Fecha,
            Clave:Clave,
            Nombre :Nombre,
            Descripcion :Descripcion,
            Unidad:Unidad,
            Precio:Precio,
            Cantidad:Cantidad,
            Iva :Iva,
            Importe :Importe,
            Existencia:Existencia
          },
          success: function(data) {
          },
        });
    }
  }

  }
</script>

<script src="../../js/adjudicacionControl.js"></script>
<script src="../../js/main.js"></script>