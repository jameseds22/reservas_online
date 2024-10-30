<div>
    <h2 class="text-center text_color_balnco">Nombre del Establecimiento</h2>
    <div class="d-flex justify-content-around">
        <h4>
            Direccion del establecimiento
        </h4>
        <h4>
            Número de estrellas
        </h4>
    </div>
</div>
<div class="container">
    <div class="img_flayer_establecim bg_gris01_web"></div>

    <h3 class="text_color_balnco">Servicios:</h3>
    
    <div class="row m-0 align-items-md-stretch">

        <div class="col-md-6 p-2">
            <div class="h-100 p-3 bg_negro_web rounded-3">
                <h2 class="text_color_balnco">Tipo de servicio</h2>
                <div class="d-flex">
                    <div class="d-grid text_color_balnco">
                        <p> Tiempo de Duracion</p>
                        <p> Precio</p>
                    </div>
                    <button onclick="inicio.abrir_modal_reserva();" class="bg_amarillo_web_hover ms-auto my-auto btn_comprar" type="button">Reservar</button>
                </div>
            </div>
        </div>

        <div class="col-md-6 p-2">
            <div class="h-100 p-3 bg_negro_web rounded-3">
                <h2 class="text_color_balnco">Tipo de servicio</h2>
                <div class="d-flex">
                    <div class="d-grid text_color_balnco">
                        <p> Tiempo de Duracion</p>
                        <p> Precio</p>
                    </div>
                    <button onclick="inicio.abrir_modal_reserva();" class="bg_amarillo_web_hover ms-auto my-auto btn_comprar" type="button">Reservar</button>
                </div>
            </div>
        </div>

        <div class="col-md-6 p-2">
            <div class="h-100 p-3 bg_negro_web rounded-3">
                <h2 class="text_color_balnco">Tipo de servicio</h2>
                <div class="d-flex">
                    <div class="d-grid text_color_balnco">
                        <p> Tiempo de Duracion</p>
                        <p> Precio</p>
                    </div>
                    <button onclick="inicio.abrir_modal_reserva();" class="bg_amarillo_web_hover ms-auto my-auto btn_comprar" type="button">Reservar</button>
                </div>
            </div>
        </div>

        <div class="col-md-6 p-2">
            <div class="h-100 p-3 bg_negro_web rounded-3">
                <h2 class="text_color_balnco">Tipo de servicio</h2>
                <div class="d-flex">
                    <div class="d-grid text_color_balnco">
                        <p> Tiempo de Duracion</p>
                        <p> Precio</p>
                    </div>
                    <button onclick="inicio.abrir_modal_reserva();" class="bg_amarillo_web_hover ms-auto my-auto btn_comprar" type="button">Reservar</button>
                </div>
            </div>
        </div>
    </div>

    <h3 class="text_color_balnco">Personal:</h3>

    <div class="row m-0 row-cols-4">
        <div class="text-center">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
            <h2 class="fw-normal">Nombre</h2>
            <p>Calificacion en estrellas</p>
        </div>
        <div class="text-center">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
            <h2 class="fw-normal">Nombre</h2>
            <p>Calificacion en estrellas</p>
        </div>
        <div class="text-center">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
            <h2 class="fw-normal">Nombre</h2>
            <p>Calificacion en estrellas</p>
        </div>
        <div class="text-center">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
            <h2 class="fw-normal">Nombre</h2>
            <p>Calificacion en estrellas</p>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_reserva_serv" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content bg_amarillo_web">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nombre del servicio</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="d-flex justify-content-around">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="selec_fecha_reser" placeholder="Fecha">
                                <label for="selec_fecha_reser">Fecha</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="time" class="form-control" id="selec_hora_resev" placeholder="Hora">
                                <label for="selec_hora_resev">Hora</label>
                            </div>
                        </div>

                        <h3 class="text_color_negro">Quien lo Atendera?</h3>

                        <div class="row m-0 row-cols-4">
                            <div class="text-center">
                                <svg class="bd-placeholder-img rounded-circle" width="90" height="90" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
                                <h4 class="fw-normal">Nombre</h4>
                                <p>Calificacion en estrellas</p>
                            </div>
                            <div class="text-center">
                                <svg class="bd-placeholder-img rounded-circle" width="90" height="90" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
                                <h4 class="fw-normal">Nombre</h4>
                                <p>Calificacion en estrellas</p>
                            </div>
                            <div class="text-center">
                                <svg class="bd-placeholder-img rounded-circle" width="90" height="90" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
                                <h4 class="fw-normal">Nombre</h4>
                                <p>Calificacion en estrellas</p>
                            </div>
                            <div class="text-center">
                                <svg class="bd-placeholder-img rounded-circle" width="90" height="90" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
                                <h4 class="fw-normal">Nombre</h4>
                                <p>Calificacion en estrellas</p>
                            </div>
                        </div>

                        <h3 class="text_color_negro">Servicios:</h3>
    
                        <div class="row m-0 align-items-md-stretch">
                            <div class="col-md-6 p-2">
                                <div class="h-100 p-3 bg_negro_web rounded-3">
                                    <h4 class="text_color_balnco">Tipo de servicio</h4>
                                    <div class="d-flex">
                                        <div class="d-grid text_color_balnco">
                                            <p> Tiempo de Duracion</p>
                                            <p> Precio</p>
                                        </div>
                                        <button class="bg_amarillo_web_hover ms-auto my-auto btn_comprar" type="button">Agregar</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 p-2">
                                <div class="h-100 p-3 bg_negro_web rounded-3">
                                    <h4 class="text_color_balnco">Tipo de servicio</h4>                                    <div class="d-flex">
                                        <div class="d-grid text_color_balnco">
                                            <p> Tiempo de Duracion</p>
                                            <p> Precio</p>
                                        </div>
                                        <button class="bg_amarillo_web_hover ms-auto my-auto btn_comprar" type="button">Agregar</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 p-2">
                                <div class="h-100 p-3 bg_negro_web rounded-3">
                                    <h4 class="text_color_balnco">Tipo de servicio</h4>
                                    <div class="d-flex">
                                        <div class="d-grid text_color_balnco">
                                            <p> Tiempo de Duracion</p>
                                            <p> Precio</p>
                                        </div>
                                        <button class="bg_amarillo_web_hover ms-auto my-auto btn_comprar" type="button">Agregar</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 p-2">
                                <div class="h-100 p-3 bg_negro_web rounded-3">
                                    <h4 class="text_color_balnco">Tipo de servicio</h4>
                                    <div class="d-flex">
                                        <div class="d-grid text_color_balnco">
                                            <p> Tiempo de Duracion</p>
                                            <p> Precio</p>
                                        </div>
                                        <button class="bg_amarillo_web_hover ms-auto my-auto btn_comprar" type="button">Agregar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="button" class="btn_comprar bg_negro_web_hover">Confirmar Reserva</button>
                        </div>
                    </form>
                </div>
            </div>
      </div>
</div>
