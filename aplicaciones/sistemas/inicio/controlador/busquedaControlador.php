<?php
class busquedaControlador extends help 
{
    private $Modelo;

    public function __construct()
    {
        $this->core_ses();
        $this->Modelo = new busquedaModelo();
    }
    public function busqueda($p) {
        $this->getFile('busqueda/busqueda.php',$p);
    } 

}
?>