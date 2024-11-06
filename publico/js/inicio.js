inicio = {
    init:function(){
        inicio.buscar_estableciminetos();
        inicio.select_strellas();
        inicio.listar_agregar_servicios();
    },
    buscar_estableciminetos:function(){
        $('#buscar_establecimientos').click(function(){
            var vp_id_servicio = $('#bucar_servicio_estable').val();
            var vp_id_distrito = $('#bucar_distrito_estable').val();
            var data = {
                vp_id_servicio : vp_id_servicio,
                vp_id_distrito : vp_id_distrito
            }
            $.ajax({
                url: "/inicio/inicio/construc_estableciminetojson/",
                type: "POST",
                data: data,
                dataType: "json",
                success: function(response){
                    var rshtml = response.data;
                    var rs_cant = response.total;
                    $('.num_establecimientos').empty();
                    $('.num_establecimientos').text(rs_cant);

                    $('#cont_search_establecimient').empty();
                    $('#cont_search_establecimient').html(rshtml);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('Error en la petición:', textStatus, errorThrown, jqXHR);
                }        
            });
        });
    },

    listar_agregar_servicios:function(){
        $('.abrir_modal_reserva').on('click', function(){
            var id_serv = $(this).attt('id_servicio');


            var vp_id_establecimiento = $('#id_establecim').val();
            var vp_id_servicio = $('#bucar_distrito_estable').val();
            var data = {
                vp_id_establecimiento : vp_id_establecimiento,
                vp_id_servicio : vp_id_servicio
            }
            $.ajax({
                url: "/inicio/establecimiento/agregar_servicios/",
                type: "POST",
                data: data,
                dataType: "json",
                success: function(response){
                    var rshtml = response.data;
                    var rs_cant = response.total;
                    $('.num_establecimientos').empty();
                    $('.num_establecimientos').text(rs_cant);

                    $('#cont_search_establecimient').empty();
                    $('#cont_search_establecimient').html(rshtml);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('Error en la petición:', textStatus, errorThrown, jqXHR);
                }        
            });
        });
    },
    select_strellas:function(){
        var currentRating = 0;

        $('#starRating i').on('click', function() {
            currentRating = $(this).data('value');
            updateStars(currentRating);
        });

        $('#starRating i').on('mouseover', function() {
            const hoverRating = $(this).data('value');
            updateStars(hoverRating);
        });

        $('#starRating').on('mouseleave', function() {
            updateStars(currentRating);
        });

        function updateStars(rating) {
            $('#starRating i').each(function(index) {
                if (index < rating) {
                    $(this).removeClass('bi-star').addClass('bi-star-fill');
                } else {
                    $(this).removeClass('bi-star-fill').addClass('bi-star');
                }
            });
        }
    },
    btn_reservar:function(){

    },

    abrir_modal_reserva:function(){
        $('#modal_reserva_serv').modal('show');
    }
}
$(document).ready(function() {
    inicio.init();
});