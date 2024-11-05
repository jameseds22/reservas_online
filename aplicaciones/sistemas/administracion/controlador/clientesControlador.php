<?php
class clientesControlador extends help 
{
    private $Modelo;

    public function __construct()
    {
        $this->core_ses();
        $this->Modelo = new clientesModelo();
    }
    public function default($p) {
        $this->getFile('clientes/clientes.php',$p);
    } 

}
?>