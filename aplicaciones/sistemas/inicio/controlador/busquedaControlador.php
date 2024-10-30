<?php
class busquedaControlador extends help 
{
    private $Modelo;

    public function __construct()
    {
        $this->core_ses();
        $this->Modelo = new busquedaModelo();
    }
    public function default($p) {
        $this->getFile('busqueda/busqueda.php',$p);
    } 

}
?>