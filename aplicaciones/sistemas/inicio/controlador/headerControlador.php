<?php
class headerControlador extends help 
{
    private $Modelo;

    public function __construct()
    {
        $this->core_ses();
        $this->Modelo = new headerModelo();
    }

    /*public function header($p)//temporal
    {
        $this->getFile('header/header.php', $p);
    }*/

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