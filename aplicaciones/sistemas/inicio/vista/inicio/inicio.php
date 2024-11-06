<?php
    $lit_dis = $this->get_distritos($p);
    
    $lit_serv = $this->get_servicios($p);
    
    $establecim = $this->buscar_establecimientos(array('vp_id_servicio'=>0, 'vp_id_distrito'=>0));

?>
<div class="container">
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-inner position-relative">
            <div class="container position-absolute z-1 h-100" style="background: #000000ad;">
                <div class="carousel-caption text-start">
                    <form class="busqueda_servicios">
                        <h3 class="text-center">Filtros</h3>
                        <div class="d-flex justify-content-evenly align-items-center">

                            <div class="form-floating">
                                <select class="form-select" id="bucar_distrito_estable" aria-label="Floating label select example">
                                    <option value="0" selected>Todos</option>
                                    <?php
                                        $lit_dis = $lit_dis['data'];
                                        foreach($lit_dis as $key => $v){
                                            echo '<option value="'.$v['id_distritos'].'">'.$v['distrito'].'</option>';
                                        }
                                    ?>
                                </select>
                                <label for="bucar_distrito_estable">Distrito</label>
                            </div>
                            <div class="form-floating">
                                <select class="form-select" id="bucar_servicio_estable" aria-label="Floating label select example">
                                    <option value="0" selected>Todos</option>
                                    <?php
                                        $lit_serv = $lit_serv['data'];
                                        foreach($lit_serv as $key => $v){
                                            echo '<option value="'.$v['id_servicios'].'">'.$v['nom_servicio'].'</option>';
                                        }
                                    ?>
                                </select>
                                <label for="bucar_servicio_estable">Servicios</label>
                            </div>
                            <div class="form-floating">
                                <button class="bg_negro_web_hover px-2 py-1 bi bi-search rounded-pill border-0" id="buscar_establecimientos" type="button">Buscar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="carousel-item active h_carusel_inicio">
                <img src="/img/flayer/flayer_carrusel1.jpeg" width="100%" height="100%" alt="">
            </div>
            <div class="carousel-item h_carusel_inicio">
                <img src="/img/flayer/flayer_carrusel2.jpeg" width="100%" height="100%" alt="">
            </div>
            <div class="carousel-item h_carusel_inicio">
                <img src="/img/flayer/flayer_carrusel3.jpg" width="100%" height="100%" alt="">
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
            Cantidad de Establecimientos <b class="num_establecimientos"><?php echo $establecim['total'];?></b>
        </div>
        <div>

        </div>
    </div>
</div>


<div class="container actualizar_lista_Serv">
    <div id="cont_search_establecimient" class="row m-0 row-cols-3">
        <?php
            $establecim = $establecim['data'];
            foreach($establecim as $key => $v){
                echo $this->construc_establecimineto($v);
            }
        ?>
    </div>
</div>
