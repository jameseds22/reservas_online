<div class="container">
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-inner position-relative">
            <div class="container position-absolute z-1 h-100 ">
                <div class="carousel-caption text-start">
                    <form class="busqueda_servicios">
                        <h3 class="text-center">Filtros</h3>
                        <div class="d-flex justify-content-evenly">
                            <div class="form-floating">
                                <select class="form-select" id="categiri_serv" aria-label="Floating label select example">
                                    <option selected>Seleccione un Servicio</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label for="categiri_serv">Servicios</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="selec_fecha" placeholder="Fecha">
                                <label for="selec_fecha">Fecha</label>
                            </div>
                            <div class="star-rating text_color_amarillo" id="starRating">
                                <i class="bi bi-star" data-value="1"></i>
                                <i class="bi bi-star" data-value="2"></i>
                                <i class="bi bi-star" data-value="3"></i>
                                <i class="bi bi-star" data-value="4"></i>
                                <i class="bi bi-star" data-value="5"></i>
                            </div>
                           
                        </div>
                    </form>
                </div>
            </div>
            <div class="carousel-item active h_carusel_inicio">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
            </div>
            <div class="carousel-item h_carusel_inicio">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
            </div>
            <div class="carousel-item h_carusel_inicio">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
            </div>
        </div>
        <button class="carousel-control-prev z-2" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next z-2" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container">
    <div class="text_color_balnco bg_negro_web rounded-4 d-flex justify-content-between p-3 my-2">
        <div>
            # Servicios Encontrados
        </div>
        <div>

        </div>
    </div>
</div>


<div class="container actualizar_lista_Serv">
    <div class="row m-0 row-cols-3">
        
        <a href="/inicio/establecimiento" class="p-1 text-decoration-none">
            <div class="rounded-5 bg_verde02_web p-3 pb-0 text-center overflow-hidden">
                <div class="my-3">
                    <h2 class="display-5 text_color_negro">Nombre del Establecimiento</h2>
                    <p class="lead text_color_negro">Dirección del Establecimiento.</p>
                </div>
                <div class="bg-body-tertiary shadow-sm mx-auto" style="height: 300px; border-radius: 21px 21px 0 0;">imagen</div>
            </div>
        </a>
        <a href="#" class="p-1 text-decoration-none">
            <div class="rounded-5 bg_verde02_web p-3 pb-0 text-center overflow-hidden">
                <div class="my-3">
                    <h2 class="display-5 text_color_negro">Nombre del Establecimiento</h2>
                    <p class="lead text_color_negro">Dirección del Establecimiento.</p>
                </div>
                <div class="bg-body-tertiary shadow-sm mx-auto" style="height: 300px; border-radius: 21px 21px 0 0;">imagen</div>
            </div>
        </a>
        <a href="#" class="p-1 text-decoration-none">
            <div class="rounded-5 bg_verde02_web p-3 pb-0 text-center overflow-hidden">
                <div class="my-3">
                    <h2 class="display-5 text_color_negro">Nombre del Establecimiento</h2>
                    <p class="lead text_color_negro">Dirección del Establecimiento.</p>
                </div>
                <div class="bg-body-tertiary shadow-sm mx-auto" style="height: 300px; border-radius: 21px 21px 0 0;">imagen</div>
            </div>
        </a>
    </div>
</div>
