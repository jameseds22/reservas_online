<?php
class reservasControlador extends help 
{
    private $Modelo;

    public function __construct()
    {
        $this->core_ses();
        $this->Modelo = new reservasModelo();
    }
    public function default($p) {
        $this->getFile('reservas/reservas.php',$p);
    } 

}
?>