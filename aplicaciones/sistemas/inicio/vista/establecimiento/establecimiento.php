<?php
$rs = $this->detalle_establecimiento($p);
$rs = $rs['data'][0];
$id_establecimiento = $rs['id_establecimiento'];
?>
<div>
    <h2 class="text-center text_color_balnco"><?php echo $rs['nom_establecimiento']?></h2>
    <div class="d-flex justify-content-around">
        <h4>
            <?php echo $rs['direccion']?>
        </h4>
        <h4>
            <?php echo $rs['telefono']?>
        </h4>
    </div>
</div>
<div class="container">
    <div class="img_flayer_establecim bg_gris01_web"></div>

    <h3 class="text_color_balnco">Servicios:</h3>
    
    <div class="row m-0 align-items-md-stretch">
    
        <?php
            $servicios = $this->servicios_x_establecimiento(array('vp_id_establecimiento' => $id_establecimiento));
            $servicios = $servicios['data'];                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            foreach($servicios as $key => $v){
                echo '<div class="col-md-6 p-2">
                    <div class="h-100 p-3 bg_negro_web rounded-3">
                        <h2 class="text_color_balnco">'.$v['nom_servicio'].'</h2>
                        <div class="d-flex">
                            <div class="d-grid text_color_balnco">
                                <p>'.$v['tiempo'].' min</p>
                                <p>S/.'.$v['precio'].'</p>
                            </div>
                            <button onclick="inicio.abrir_modal_reserva();" class="abrir_modal_reserva bg_blanco_web_hover ms-auto my-auto btn_comprar" type="button" id_establecim="'.$id_establecimiento.'" id_servicio="'.$v['id_servicios'].'">Reservar</button>
                        </div>s
                    </div>
                </div>';
            }
        ?>
    </div>

    <h3 class="text_color_balnco">Personal:</h3>

    <div class="row m-0 row-cols-4">
        <?php
            $empleado = $this->empleados_x_establecimiento(array('vp_id_establecimiento' => $id_establecimiento));
            $empleado = $empleado['data'];
            foreach($empleado as $key => $v){
                echo '<div class="text-center">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
                    <h2 class="fw-normal">'.$v['nombre_empleado'].'</h2>
                    <p>'.$v['tel_user'].'</p>
                </div>';
            }
        ?>
    </div>
</div>

<div class="modal fade" id="modal_reserva_serv" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
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

                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <?php
                                $empleado = $this->empleados_x_establecimiento(array('vp_id_establecimiento' => $id_establecimiento));
                                $empleado = $empleado['data'];
                                foreach($empleado as $key => $v){
                                    echo '<input type="radio" class="btn-check" name="btnradio" id="'.$v['id_empleado'].'" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="'.$v['id_empleado'].'">
                                        <svg class="bd-placeholder-img rounded-circle" width="60" height="60" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
                                        <h2 class="fw-normal">'.$v['nombre_empleado'].'</h2>
                                        <p>'.$v['tel_user'].'</p>
                                    </label>';
                                }
                            ?>
                        </div>


                        <h3 class="text_color_negro">Servicios:</h3>
    
                        <div class="row m-0 align-items-md-stretch">
                            <?php
                                $servicios = $this->servicios_x_establecimiento(array('vp_id_establecimiento' => $id_establecimiento));
                                $servicios = $servicios['data'];
                                foreach($servicios as $key => $v){
                                    echo '<div class="col-md-6 p-2">
                                        <div class="h-100 p-2 bg_negro_web rounded-3">
                                            <h5 class="text_color_balnco">'.$v['nom_servicio'].'</h5>
                                            <div class="d-flex">
                                                <div class="d-grid text_color_balnco">
                                                    <p>'.$v['tiempo'].' min</p>
                                                    <p>S/.'.$v['precio'].'</p>
                                                </div>
                                                <button onclick="inicio.abrir_modal_reserva();" class="bg_blanco_web_hover ms-auto my-auto btn_comprar" type="button">Agregar</button>
                                            </div>
                                        </div>
                                    </div>';
                                }
                            ?>
                        </div>

                        <div>
                            <button type="button" class="btn_comprar bg_negro_web_hover">Confirmar Reserva</button>
                        </div>
                    </form>
                </div>
            </div>
      </div>
</div>
