<?php
class headerModelo extends PDO_SERVER {
    private $piolardo;

    public function __construct()
    {
        $this->piolardo = help::read_ini(RAIZ.'login/login.ini', 'piolardo');
    }

    public function valid_ingreso($p)
    {
        parent::unsetPDO();
        parent::SPname('valid_ingreso', $this->piolardo);
        parent::SP_type($p['vp_correo'],'char');
        parent::SP_type($p['vp_pass'],'char');
         //echo parent::getCall();die();
        $data = parent::ExeSP();
        return $data;
    }
}
?>