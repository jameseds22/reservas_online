<?php
class inicioControlador extends help 
{
    private $Modelo;

    public function __construct()
    {
        $this->core_ses();
        $this->Modelo = new inicioModelo();
    }
    public function default($p) {
        $this->getFile('inicio/inicio.php',$p);
    }

    public function get_distritos($p) 
    {
        $rs = $this->Modelo->get_distritos($p);
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

    public function get_servicios($p) 
    {
        $rs = $this->Modelo->get_servicios($p);
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

    public function buscar_establecimientos($p) 
    {
        $rs = $this->Modelo->buscar_establecimientos($p);
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
    public function construc_establecimineto($p){
        $html = '<a href="/inicio/establecimiento/?establecimiento='.$p['id_establecimiento'].'" class="p-1 text-decoration-none">
            <div class="rounded-5 bg_color_web_5 p-3 pb-0 text-center overflow-hidden">
                <div class="my-3">
                    <h2 class="display-5 text_color_negro">'.$p['nom_establecimiento'].'</h2>
                    <p class="lead text_color_negro">'.$p['direccion'].'</p>
                </div>
                <div class="bg-body-tertiary shadow-sm mx-auto" style="height: 300px; border-radius: 21px 21px 0 0;">
                        <img src="" alt="">
                </div>
            </div>
        </a>';
        return $html;
    }
    public function construc_estableciminetojson($p){
        $rs = $this->buscar_establecimientos($p);
        $rs = $rs['data'];
        $html = '';
        $cant = 0;
        foreach($rs as $key => $v){
            $html .= $this->construc_establecimineto($v);
            $cant ++;
        }
        $data = array(
            'success' => true,
            'total' => $cant,
            'data' => $html
        );
        return $this->header_Json($data);
    }
}
?>