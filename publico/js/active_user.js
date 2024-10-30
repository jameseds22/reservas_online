user = {
    init:function(){
        //user.cerrar_session();
    },
    cerrar_session:function(){
        $.ajax({
            url: "/inicio/header/cerrar_session/",
            type: "POST",
            success: function(response){
                location.reload();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Error en la petición:', textStatus, errorThrown, jqXHR);
            }        
        });
    }
}
$(document).ready(function() {
    user.init();
});