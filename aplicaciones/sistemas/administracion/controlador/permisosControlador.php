<?php
class permisosControlador extends help 
{
    private $Modelo;

    public function __construct()
    {
        $this->core_ses();
        $this->Modelo = new permisosModelo();
    }
    public function default($p) {
        $this->getFile('permisos/permisos.php',$p);
    } 

}
?>