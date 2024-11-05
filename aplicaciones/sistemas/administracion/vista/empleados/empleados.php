<div class="m-3">
    <h1 class="text-center">Empleados</h1>
    <div class="row m-0 row-cols-2">
        <!-- muestra ingresos dia semanales mensual -->
        <div class="p-1 col-12">
            <div class="bg_blanco_trans rounded-5 p-3">
                <h4 class="text-center">Buscar Empleado</h4>

                <form class="buscar_empleado_panel row m-0">
                    <div class="mb-3 col-5">
                        <label for="buscar_empleado" class="form-label">Empleado</label>
                        <input type="search" class="form-control" id="buscar_empleado">
                    </div>
                    <div class="col-1 align-content-center">
                        <i class="bi bi-plus-circle-fill"></i>
                    </div>
                </form>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Cede</th>
                            <th scope="col">Calificación</th>
                            <th scope="col">Menú</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>88573947595</td>
                            <td>mark@gmail.com</td>
                            <td>Breña</td>
                            <td class="d-flex">4.5 <i class="bi bi-star-fill"></i></td>
                            <td>
                                <i class="bi bi-pencil-square" title="Editar"></i>
                                <i class="bi bi-trash3-fill" title="Eliminar"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-12 p-1">
            <div class="bg_blanco_trans rounded-5 p-3">
                <form class="filtro_buscar_cliente d-flex align-items-center">
                    <div class="">
                        <label for="desde_fil_clien" class="form-label">Desde</label>
                        <input type="date" class="form-control" id="desde_fil_clien">
                    </div>
                    <div class="">
                        <label for="hastafil_clien" class="form-label">Hasta</label>
                        <input type="date" class="form-control" id="hastafil_clien">
                    </div>
                    <button class="bi bi-funnel-fill btn" type="button" style="height:fit-content;">
                        filtrar
                    </button>
                </form>
            </div>
        </div>
        <div class="col-12 p-1">
            <div class="bg_blanco_trans rounded-5 p-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Costo</th>
                            <th scope="col">Cede</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>50.00</td>
                            <td>cede 1</td>
                            <td>20-03-2025</td>
                            <td>17:30</td>
                            <td>Atendido</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-12 p-1">
            <div class="bg_blanco_trans rounded-5 p-3">
                <h4>Grafica estadisticas mensual</h4>
                
            </div>
        </div>
    </div>
</div>