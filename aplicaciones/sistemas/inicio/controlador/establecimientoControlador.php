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

}
?>