<?php
class dashboardControlador extends help 
{
    private $Modelo;

    public function __construct()
    {
        $this->core_ses();
        $this->Modelo = new dashboardModelo();
    }
    public function default($p) {
        $this->getFile('dashboard/dashboard.php',$p);
    } 

}
?>