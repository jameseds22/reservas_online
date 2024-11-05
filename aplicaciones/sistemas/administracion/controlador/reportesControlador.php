<?php
class reportesControlador extends help 
{
    private $Modelo;

    public function __construct()
    {
        $this->core_ses();
        $this->Modelo = new reportesModelo();
    }
    public function default($p) {
        $this->getFile('reportes/reportes.php',$p);
    } 

}
?>