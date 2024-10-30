inicio = {
    init:function(){
        inicio.select_strellas();
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

    abrir_modal_reserva:function(){
        $('#modal_reserva_serv').modal('show');
    }

    
}

$(document).ready(function() {
    inicio.init();
});