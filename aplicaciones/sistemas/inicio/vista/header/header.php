<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- icono bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
        <!-- javascript -->
        <link rel="stylesheet" href="/css/core.css">
        <script src="/js/inicio.js"></script>
        <!-- chartjs graficas -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <?php 
            if(ID_USR == 0){ 
                echo '<script src="/js/login.js"></script>';
            } 
            else { 
                echo '<script src="/js/active_user.js"></script>'; 
            }
            if (strpos($_SERVER['REQUEST_URI'], '/administracion') !== false) {
                echo '<script src="/js/dash.js"></script>';
            }
        ?>
        <link rel="stylesheet" href="/core.css">
    </head>

<?php
if (strpos($_SERVER['REQUEST_URI'], '/administracion') === false) {
?>


    <header>
        <nav class="navbar navbar-expand-lg bg_color_web_1">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Cambiar navegación">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- logo -->
                <a class="navbar-brand p-0 mx-4" href="/">
                    <img src="/img/logo/logo1.svg" alt="" style="height: 50px;">
                </a>
                
                <div class="collapse navbar-collapse justify-content-around" id="navbarTogglerDemo03">
                    <!-- menu de opciones  -->
                    <ul class="nav nav-pills nav-fill gap-2 p-1 small bg_color_web_2 rounded-5 shadow-sm" id="pillNav2" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text_color_balnco bg_color_web_3 rounded-5" type="button">Inicio</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text_color_balnco rounded-5" type="button">Mas...</button>
                        </li>
                        <?php
                            if(ID_USR << 0){
                        ?>
                            <li class="nav-item" role="presentation">
                                <a href="/inicio/mis_reservas" class="nav-link text_color_balnco rounded-5" type="button">Mis Reservas</a>
                            </li>
                        <?php
                            }
                        ?>
                    </ul>
                    <!-- menu usuario -->
                    <ul class="nav nav-pills nav-fill gap-2 p-1 small bg_color_web_2 rounded-5 shadow-sm " id="pillNav2" role="tablist">
                        <?php
                            if(TIPO_USR != 1){
                        ?>
                            <li class="nav-item" role="presentation">
                                <a href="/administracion/dashboard" class="bi bi-shield-check btn text_color_balnco rounded-5 p-1" id="empleados-tab2"
                                style="font-size: 30px; line-height: 0;"></a>
                            </li>
                        <?php  
                            }
                        ?>
                        <li class="nav-item" role="presentation">
                            <!-- boton despliege modal inicio registro  -->
                            <?php
                                if(ID_USR == 0){
                            ?>
                                    <button class="bi bi-person btn nav-link text_color_balnco bg_color_web_3 rounded-5 p-1" data-bs-toggle="modal" type="button" data-bs-target="#modalInicioReguistro"
                                        style="font-size: 30px; line-height: 0;">
                                    </button>
                            <?php
                                } else {
                            ?>
                                    <button class="bi bi-person btn nav-link text_color_balnco bg_color_web_3 rounded-5 p-1" data-bs-toggle="tab" type="button" role="tab" aria-selected="true"
                                        style="font-size: 30px; line-height: 0;">
                                    </button>

                            <?php
                                } 
                            ?>
                        </li>
                        <div class="text_color_balnco text-center align-content-center px-2">
                            <?php echo ID_USR == 0 ? 'Inicio': USER_NAME ?>
                        </div>
                        <?php
                            if(ID_USR << 1){
                        ?>
                                <li class="nav-item" role="presentation">
                                    <button onclick="user.cerrar_session();" class="bi bi-x nav-link text_color_balnco rounded-5 p-0 " data-bs-toggle="tab" type="button" role="tab" aria-selected="false"
                                        style="font-size: 37px; line-height: 0;">
                                    </button>
                                </li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<?php
} else {
?>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner inicio -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            </div>
        </div>
        <!-- Spinner fin -->

        <div class="sidebar pe-4 pb-3 bg_color_web_4">
            <nav class="navbar navbar-light">
                <a class="navbar-brand p-0 mx-4" href="/">
                    <img src="/img/logo/logo1.svg" alt="" style="height: 50px;">
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">james</h6>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/administracion/dashboard" class="bg_color_dash_1 my-2 nav-item nav-link"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
                    
                    <a href="/administracion/clientes" class="bg_color_dash_2 my-2 nav-item nav-link"><i class="bi bi-people me-2"></i>Clientes</a>
                    <a href="/administracion/reservas" class="bg_color_dash_3 my-2 nav-item nav-link"><i class="bi bi-calendar-check me-2"></i>Cede</a>
                    <a href="/administracion/empleados" class="bg_color_dash_4 my-2 nav-item nav-link"><i class="fa bi-people me-2"></i>Empleados</a>
                    <a href="/administracion/permisos" class="bg_color_dash_5 my-2 nav-item nav-link"><i class="bi bi-bookmark-check-fill me-2"></i>Permisos</a>
                    <!-- <a href="/administracion/reportes" class="nav-item nav-link"><i class="bi bi-journal-check me-2"></i>Reportes</a> -->
                </div>
            </nav>
        </div>


        <div class="content bg_verde02_web">

            <nav class="navbar navbar-expand bg_color_web_4 navbar-light sticky-top px-4 py-0">
                <a href="" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler text_color_negro rounded-circle justify-content-center bg_blanco_web flex-shrink-0">
                    <i class="bi bi-list"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="bi bi-bell-fill text_color_negro rounded-circle bg_blanco_web justify-content-center"></i>
                            <span class="d-none d-lg-inline-flex">Notificaciones</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Nueva Reserva</h6>
                                <small>hace 15 min</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Nueva Reserva</h6>
                                <small>hace 15 min</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Nueva Reserva</h6>
                                <small>hace 15 min</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">Tienes Notificaciones</a>
                        </div>
                    </div>
                </div>
            </nav>
<?php    
}
if(strpos($_SERVER['REQUEST_URI'], '/administracion') === false){
    echo '<body class="bg_color_web_1">';
}else {
    echo '<body class="bg_verde02_web">';
}
?>            <!-- Blank Start -->
            <!-- <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-6 text-center">
                        <h3>This is blank page</h3>
                    </div>
                </div>
            </div> -->
            <!-- Blank End -->
        <!-- modal inicio y registro si no hay una session iniciada -->
        <?PHP
            if(ID_USR == 0){
        ?>
                <div class="modal fade" id="modalInicioReguistro" tabindex="-1" aria-labelledby="modalInicioReguistroLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <!-- opciones inicio reguistro -->
                                <ul class="nav nav-pills nav-fill gap-2 p-1 small bg_verde02_web rounded-5 shadow-sm mx-auto" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
                                    <li class="nav-item" role="presentation">
                                        <button class="text_color_balnco nav-link active rounded-5" id="iniciosession-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="true">Inicio de Sesión</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="text_color_balnco nav-link rounded-5" id="reguistro-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Registro</button>
                                    </li>
                                </ul>
                                <!-- boton cerrar modal -->
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- formulari inicio de sesion -->
                                <form class="form_inicion_session">
                                    <div class="form-floating mb-3">
                                        <input type="email" name="mail_inicio" class="form-control" id="mail_inicio" placeholder="name@example.com">
                                        <label for="mail_inicio">Correo Electronico</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" name="pass_inicio" class="form-control" id="pass_inicio" placeholder="Contraseña">
                                        <label for="pass_inicio">Contraseña</label>
                                    </div>
                                    <button type="button" class="btn float-end btn_01_web bg_amarillo_web" onclick="session.iniciar_sesion();">
                                        Iniciar Sesión
                                    </button>
                                </form>
                                <!-- formulario reguistro -->
                                <form class="form_reguistro_user">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="name_reg" class="form-control" id="name_reg" placeholder="Nombre Completo">
                                        <label for="name_reg">Nombre Completo</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="tell_reg" class="form-control" id="tell_reg" placeholder="Telefono">
                                        <label for="tell_reg">Telefono</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" name="mail_reg" class="form-control" id="mail_reg" placeholder="name@example.com">
                                        <label for="mail_reg">Correo Electronico</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" name="pass_reg" class="form-control" id="pass_reg" placeholder="Contraseña">
                                        <label for="pass_reg">Contraseña</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" name="confirpass_reg" class="form-control" id="confirpass_reg" placeholder="Confirma Contraseña">
                                        <label for="confirpass_reg">Confirma Contraseña</label>
                                    </div>
                                    <button type="button" class="btn float-end btn_01_web bg_amarillo_web" onclick="session.registrarse();">
                                        Reguistrar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        ?>