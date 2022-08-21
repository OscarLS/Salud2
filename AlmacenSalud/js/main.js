$(document).ready(function () {
  
  function loadOptionPartida() {
    $.ajax({
      url: "../../database/verPartida.php",
      type: "POST",
      success: function (data) {
        $("#partida").html(data);
      },
    });
  }
  loadOptionPartida();

  function loadOptionFinanciamiento() {
    $.ajax({
      url: "../../database/verFinanciamiento.php",
      type: "POST",
      success: function (data) {
        $("#financiamiento").html(data);
      },
    });
  }
  loadOptionFinanciamiento();

  function loadOptionPrograma() {
    $.ajax({
      url: "../../database/verPrograma.php",
      type: "POST",
      success: function (data) {
        $("#programa").html(data);
      },
    });
  }
  loadOptionPrograma();

  function loadOptionUnidad() {
    $.ajax({
      url: "../../database/verUnidad.php",
      type: "POST",
      success: function (data) {
        $("#unidad").html(data);
      },
    });
  }
  loadOptionUnidad();

  function loadOptionProveedor() {
    $.ajax({
      url: "../../database/verProveedor.php",
      type: "POST",
      success: function (data) {
        $("#proveedor").html(data);
      },
    });
  }
  loadOptionProveedor();

  function loadOptionCategoria() {
    $.ajax({
      url: "../../database/verCategoria.php",
      type: "POST",
      success: function (data) {
        $("#categoriaProd").html(data);
      },
    });
  }
  loadOptionCategoria();

  function loadOptionUn() {
    $.ajax({
      url: "../../database/verUni.php",
      type: "POST",
      success: function (data) {
        $("#unidadProd").html(data);
      },
    });
  }
  loadOptionUn();

  function loadOptionArticulo() {
    $.ajax({
      url: "../../database/verArticulo.php",
      type: "POST",
      success: function (data) {
        $("#producto").html(data);
      },
    });
  }
  loadOptionArticulo();


  $(function () {
    $("#producto").on("change", function () {
      var id = $("#producto").val();
      $.ajax({
        url: "../../BuscarProducto.php",
        type: "POST",
        data: "id=" + id,
        success: function (data) {
          var nombre = data.split(",")[1];
          var unidad = data.split(",")[0];
          var descripcion = data.split(",")[2];
          $("#product input").remove();
          $("#product").append(nombre);
          $("#unit input").remove();
          $("#unit").append(unidad);
          $("#explicacion textarea").remove();
          $("#explicacion").append(descripcion);
        },
      });
      return false;
    });
  });

  $("#btnRegistroPartida").click(function (e) {
    e.preventDefault();

    var clave = $("#claveP").val();
    var nombre = $("#nombreP").val();
    if (nombre !== "" && clave !== "") {
      $.ajax({
        url: "../../database/subirPartidaModal.php",
        type: "POST",
        cache: false,
        data: { clave: clave, nombre: nombre },
        success: function (data) {
          const modal_container_Partida = document.getElementById(
            "modal_container_Partida"
          );
          modal_container_Partida.classList.remove("show");
          alert("Datos insertados correctamente");
          loadOptionPartida();
        },
      });
    } else {
      alert("Todos los campos son obligatorios");
    }
  });

  $("#btnRegFinan").click(function (e) {
    e.preventDefault();

    var nombre = $("#nombreFF").val();
    var descripcion = $("#descripcionFF").val();

    if (nombre !== "") {
      $.ajax({
        url: "../../database/SubirFinanciamientoModal.php",
        type: "POST",
        cache: false,
        data: { nombre: nombre, descripcion: descripcion },
        success: function (data) {
          const modal_container_FF =
            document.getElementById("modal_container_FF");
          modal_container_FF.classList.remove("show");
          alert("Datos insertados correctamente");
          loadOptionFinanciamiento();
        },
      });
    } else {
      alert("Todos los campos son obligatorios");
    }
  });

  $("#btnRegProg").click(function (e) {
    e.preventDefault();

    var nombre = $("#nombreProg").val();

    if (nombre !== "") {
      $.ajax({
        url: "../../database/SubirProgramaModal.php",
        type: "POST",
        cache: false,
        data: { nombre: nombre },
        success: function (data) {
          const modal_container_Programa = document.getElementById(
            "modal_container_Programa"
          );
          modal_container_Programa.classList.remove("show");
          alert("Datos insertados correctamente");
          loadOptionPrograma();
        },
      });
    } else {
      alert("Todos los campos son obligatorios");
    }
  });

  $("#btnRegCentro").click(function (e) {
    e.preventDefault();

    var nombre = $("#nombreCentro").val();
    var direccion = $("#direccionCentro").val();
    var jurisdiccion = $("#jurisdiccion").val();

    if (nombre !== "" && direccion !== "" && jurisdiccion !== "") {
      $.ajax({
        url: "../../database/SubirCentroModal.php",
        type: "POST",
        cache: false,
        data: {
          nombre: nombre,
          direccion: direccion,
          jurisdiccion: jurisdiccion,
        },
        success: function (data) {
          const modal_container_UnidadA = document.getElementById(
            "modal_container_UnidadA"
          );
          modal_container_UnidadA.classList.remove("show");
          alert("Datos insertados correctamente");
          loadOptionUnidad();
        },
      });
    } else {
      alert("Todos los campos son obligatorios");
    }
  });

  $("#btnRegProv").click(function (e) {
    e.preventDefault();

    var nombre = $("#nombreProv").val();
    var rfc = $("#rfcProv").val();
    var telefono = $("#telefonoProv").val();
    var correo = $("#correoProv").val();
    var direccion = $("#direccionProv").val();

    if (nombre !== "") {
      $.ajax({
        url: "../../database/SubirProveedorModal.php",
        type: "POST",
        cache: false,
        data: {
          nombre: nombre,
          rfc: rfc,
          telefono: telefono,
          correo: correo,
          direccion: direccion,
        },
        success: function (data) {
          const modal_container_Provedor = document.getElementById(
            "modal_container_Provedor"
          );
          modal_container_Provedor.classList.remove("show");
          alert("Datos insertados correctamente");
          loadOptionProveedor();
        },
      });
    } else {
      alert("Todos los campos son obligatorios");
    }
  });


  $("#btnRegProd").click(function (e) {
    e.preventDefault();

    var clave = $("#claveProd").val();
    var unidad = $("#unidadProd").val();
    var nombre = $("#nombreProd").val();
    var descripcion = $("#descripcionProd").val();
    var categoria = $("#categoriaProd").val();
    var serie = $("#serieProd").val();
    
    if (clave !== "") {
      $.ajax({
        url: "../../database/SubirProductoModal.php",
        type: "POST",
        cache: false,
        data: {
          clave: clave,
          unidad: unidad,
          nombre: nombre,
          descripcion: descripcion,
          categoria: categoria,
          serie: serie
        },
        success: function (data) {
          const modal_container_Producto = document.getElementById('modal_container_Producto')
          modal_container_Producto.classList.remove("show");
          alert("Datos insertados correctamente");
          loadOptionArticulo();
        },
      });
    } else {
      alert("Todos los campos son obligatorios");
    }
  });

  $("#btnRegUniPro").click(function (e) {
    e.preventDefault();

    var unidad = $("#unidadPro2").val();
    
    if (unidad !== "") {
      $.ajax({
        url: "../../database/SubirUnidadModal.php",
        type: "POST",
        cache: false,
        data: {
          unidad: unidad
        },
        success: function (data) {
          const modal_container_Unidad = document.getElementById('modal_container_Unidad');
          modal_container_Unidad.classList.remove("show");
          alert("Datos insertados correctamente");
          loadOptionUn();
        },
      });
    } else {
      alert("Todos los campos son obligatorios");
    }
  });

  $("#btnRegCategoriaPro").click(function (e) {
    e.preventDefault();

    var categoria = $("#categoriaProd2").val();
    
    if (categoria !== "") {
      $.ajax({
        url:  "../../database/SubirCategoriaModal.php",
        type: "POST",
        cache: false,
        data: {
          categoria: categoria
        },
        success: function (data) {
          const modal_container_Categoria = document.getElementById('modal_container_Categoria');
          modal_container_Categoria.classList.remove("show");
          alert("Datos insertados correctamente");
          loadOptionCategoria();
        },
      });
    } else {
      alert("Todos los campos son obligatorios");
    }
  });


});
