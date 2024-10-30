session = {
    init:function(){
        session.btn_reg_inicio();
    },
    btn_reg_inicio:function(){
        $('.form_reguistro_user').hide();
        $('#iniciosession-tab2').click(function(){
            if(!$('.form_inicion_session').is(':visible')){
                $('.form_reguistro_user').hide();
                $('.form_inicion_session').show();
            }
        });
        $('#reguistro-tab2').click(function(){
            if(!$('.form_reguistro_user').is(':visible')){
                $('.form_inicion_session').hide();
                $('.form_reguistro_user').show();
            }
        });
    },
    registrarse:function(){
        var vp_nom_user = $('#name_reg').val();
        var vp_correo = $('#mail_reg').val();
        var vp_pass = $('#pass_reg').val();
        var vp_tel_user = $('#tell_reg').val();

        var data = {
            vp_nom_user : vp_nom_user,
            vp_correo : vp_correo,
            vp_pass : vp_pass,
            vp_tel_user : vp_tel_user
        }
        $.ajax({
            url: "/inicio/header/registrar_usuario/",
            type: "POST",
            data: data,
            dataType: "json",
            success: function(response){
                var rs = response.data[0];
                if(rs['error_sql'] != 0){
                    $('#iniciosession-tab2').click();
                } else {
                    alert(rs['msj_sql']);
                }                
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Error en la petición:', textStatus, errorThrown, jqXHR);
            }        
        });
    },
    iniciar_sesion:function(){
        var correo = $('#mail_inicio').val();
        var pass = $('#pass_inicio').val();
        var data = {
            correo_usuario : correo,
            contrasena : pass
        }
        $.ajax({
            url: "/inicio/header/verificar_credenciales/",
            type: "POST",
            data: data,
            dataType: "json",
            success: function(response){
                var rs = response.data[0];
                if(rs['error_sql'] != 0){
                    location.reload();
                } else {
                    alert(rs['msj_sql']);
                }                
            },    
        });
    },
    
}
$(document).ready(function() {
    session.init();
});