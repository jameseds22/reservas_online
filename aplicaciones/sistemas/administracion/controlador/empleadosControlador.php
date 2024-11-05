<?php
class empleadosControlador extends help 
{
    private $Modelo;

    public function __construct()
    {
        $this->core_ses();
        $this->Modelo = new empleadosModelo();
    }
    public function default($p) {
        $this->getFile('empleados/empleados.php',$p);
    } 

}
?>