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
        <?php 
            if(ID_USR == 0){ 
                echo '<script src="/js/login.js"></script>';
            } 
            else { 
                echo '<script src="/js/active_user.js"></script>'; 
            }
            if (strpos($_SERVER['REQUEST_URI'], '/administracion') !== false) {
                echo '<script src="publico/js/dash.js"></script>';
            }
        ?>
        <link rel="stylesheet" href="/core.css">
    </head>

<?php
if (strpos($_SERVER['REQUEST_URI'], '/administracion') === false) {
?>


    <header>
        <nav class="navbar navbar-expand-lg bg_verde01_web">
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
                    <ul class="nav nav-pills nav-fill gap-2 p-1 small bg_verde02_web rounded-5 shadow-sm" id="pillNav2" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text_color_balnco active rounded-5" id="home-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="true">Inicio</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text_color_balnco rounded-5" id="profile-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Cortes</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text_color_balnco rounded-5" id="contact-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Barba</button>
                        </li>
                    </ul>
                    <!-- menu usuario -->
                    <ul class="nav nav-pills nav-fill gap-2 p-1 small bg_verde02_web rounded-5 shadow-sm " id="pillNav2" role="tablist">
                        <?php
                            if(ID_USR != 0){
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
                                    <button class="bi bi-person btn nav-link text_color_balnco active rounded-5 p-1" data-bs-toggle="modal" type="button" data-bs-target="#modalInicioReguistro"
                                        style="font-size: 30px; line-height: 0;">
                                    </button>
                            <?php
                                } else {
                            ?>
                                    <button class="bi bi-person btn nav-link text_color_balnco active rounded-5 p-1" data-bs-toggle="tab" type="button" role="tab" aria-selected="true"
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
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="#" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>PIOLARDO</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="#" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item">Buttons</a>
                            <a href="#" class="dropdown-item">Typography</a>
                            <a href="#" class="dropdown-item">Other Elements</a>
                        </div>
                    </div>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item">Sign In</a>
                            <a href="#" class="dropdown-item">Sign Up</a>
                            <a href="#" class="dropdown-item">404 Error</a>
                            <a href="#" class="dropdown-item active">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
<?php    
}
?>
            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-6 text-center">
                        <h3>This is blank page</h3>
                    </div>
                </div>
            </div>
            <!-- Blank End -->




    <body class="bg_verde01_web">

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
            echo $_SERVER['REQUEST_URI'];
        ?>