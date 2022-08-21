$(function() {
    $('#producto').on('change', function() {
        var id = $('#producto').val();
        $.ajax({
            url : 'BuscarProducto.php',
            type : 'POST',
            data : 'id='+id,
            success : function(data) {
                var nombre = (data.split(",")[1]);
                var unidad = (data.split(",")[0]);
                var descripcion = (data.split(",")[2]);
                $('#product input').remove();
                $('#product').append(nombre);
                $('#unit input').remove();
                $('#unit').append(unidad);
                $('#explicacion textarea').remove();
                $('#explicacion').append(descripcion);
            }
        });
        return false;
    });
    
});