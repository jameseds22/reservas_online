<?php
class mis_reservasModelo extends PDO_SERVER {
    private $correo;
    private $piolardo;

    public function __construct()
    {
        $this->piolardo = help::read_ini(RAIZ.'login/login.ini', 'piolardo');
        $this->correo = help::read_ini(RAIZ.'login/login.ini', 'correo');
    }
}
?>