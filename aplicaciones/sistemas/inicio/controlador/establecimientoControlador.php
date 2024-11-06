<?php
class establecimientoControlador extends help 
{
    private $Modelo;

    public function __construct()
    {
        $this->core_ses();
        $this->Modelo = new establecimientoModelo();
    }
    public function default($p) {
        $this->getFile('establecimiento/establecimiento.php',$p);
    } 

    public function detalle_establecimiento($p) 
    {
        $p['vp_id_establecimiento'] = $p['establecimiento'];
        $rs = $this->Modelo->detalle_establecimiento($p);
        $array = [];
        foreach ($rs as $key => $v){
            $array[] = $v;
        }
        $data = array(
            'success' => true,
            'total' => count($array),
            'data' => $array
        );
        return $data;
    }

    public function servicios_x_establecimiento($p) 
    {
        $rs = $this->Modelo->servicios_x_establecimiento($p);
        $array = [];
        foreach ($rs as $key => $v){
            $array[] = $v;
        }
        $data = array(
            'success' => true,
            'total' => count($array),
            'data' => $array
        );
        return $data;
    }

    public function empleados_x_establecimiento($p) 
    {
        $rs = $this->Modelo->empleados_x_establecimiento($p);
        $array = [];
        foreach ($rs as $key => $v){
            $array[] = $v;
        }
        $data = array(
            'success' => true,
            'total' => count($array),
            'data' => $array
        );
        return $data;
    }

    public function agregar_servicios($p) 
    {
        $rs = $this->Modelo->agregar_servicios($p);
        $array = [];
        foreach ($rs as $key => $v){
            $array[] = $v;
        }
        $data = array(
            'success' => true,
            'total' => count($array),
            'data' => $array
        );
        return $this->header_Json($data);
    }
}
?>