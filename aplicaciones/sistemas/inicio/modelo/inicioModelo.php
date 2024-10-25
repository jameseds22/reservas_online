<?php
class inicioModelo extends PDO_SERVER {
    private $correo;
    private $piolardo;

    public function __construct()
    {
        $this->piolardo = help::read_ini(RAIZ.'login/login.ini', 'piolardo');
        $this->correo = help::read_ini(RAIZ.'login/login.ini', 'correo');
    }
    
    public function valid_ingreso($p)//temporal
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