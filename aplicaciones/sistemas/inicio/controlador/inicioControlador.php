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
    public function busqueda($p) {
        $this->getFile('busqueda/busqueda.php',$p);
    } 

    public function valid_ingreso($p) 
    {
        $rs = $this->Modelo->valid_ingreso($p);
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