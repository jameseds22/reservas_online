<?php
class footerControlador extends help 
{
    private $Modelo;

    public function __construct()
    {
        $this->core_ses();
        $this->Modelo = new footerModelo();
    }

    public function valid_ingreso($p)//temporal
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