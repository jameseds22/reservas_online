<?php
class mis_reservasControlador extends help 
{
    private $Modelo;

    public function __construct()
    {
        $this->core_ses();
        $this->Modelo = new mis_reservasModelo();
    }
    public function default($p) {
        $this->getFile('mis_reservas/mis_reservas.php',$p);
    }
}
?>