<div class="m-3">
    <div class="row m-0 row-cols-2">
        <!-- muestra ingresos dia semanales mensual -->
        <div class="p-1">
            <div class="bg_blanco_trans rounded-5 p-3">
                <ul class="nav nav-pills nav-fill gap-2 p-1 small bg_blanco_web rounded-5 shadow-sm" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-white); --bs-nav-pills-link-active-bg: var(--bs-black); --bs-nav-link-hover-color: var(--bs-black)">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text_color_negro active rounded-5" id="dia-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="true">Dia</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text_color_negro rounded-5" id="semana-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Semana</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text_color_negro rounded-5" id="mes-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Mes</button>
                    </li>
                </ul>

                <div class="d-flex justify-content-around">
                    <div>
                        <div>Reservas:</div>
                        <div style="font-size: 40px;">888</div>
                    </div>
                    <div>
                        <div>Ingresos:</div>
                        <div style="font-size: 40px;">S/ 888.88</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-1">
            <div class="bg_blanco_trans rounded-5 p-3">
                <div class="d-flex">
                    <div>
                        <ul class="d-grid nav nav-pills nav-fill gap-2 p-1 small bg_blanco_web rounded-4 shadow-sm" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-white); --bs-nav-pills-link-active-bg: var(--bs-black); --bs-nav-link-hover-color: var(--bs-black)">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link text_color_negro active rounded-5" id="cede1-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="true">Cede 1</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link text_color_negro rounded-5" id="cede2-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Cede 2</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link text_color_negro rounded-5" id="cede3-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Cede 3</button>
                            </li>
                        </ul>
                    </div>
                    <div class="mx-auto">
                        <canvas id="rep_ingres_sol_empl"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-1">
            <div class="bg_blanco_trans rounded-5 p-3">
                <h4>Reservas por cede</h4>
                <canvas id="num_reserv_x_cede"></canvas>
            </div>
        </div>
        <div class="p-1">
            <div class="bg_blanco_trans rounded-5 p-3">
                <h4>Ingresos por cede</h4>
                <canvas id="num_ingres_x_cede"></canvas>
            </div>
        </div>
    </div>
</div>