<?php
class inicioModelo extends PDO_SERVER {
    private $correo;
    private $piolardo;

    public function __construct()
    {
        $this->piolardo = help::read_ini(RAIZ.'login/login.ini', 'piolardo');
        $this->correo = help::read_ini(RAIZ.'login/login.ini', 'correo');
    }
    
    public function get_distritos($p)
    {
        parent::unsetPDO();
        parent::SPname('get_distritos', $this->piolardo);
        //echo parent::getCall();die();
        
        $data = parent::ExeSP();
        return $data;
    }
    public function get_servicios($p)
    {
        parent::unsetPDO();
        parent::SPname('get_servicios', $this->piolardo);
        //echo parent::getCall();die();
        
        $data = parent::ExeSP();
        return $data;
    }
    public function buscar_establecimientos($p)
    {
        parent::unsetPDO();
        parent::SPname('buscar_establecimientos', $this->piolardo);

        parent::SP_type($p['vp_id_servicio'],'int');
        parent::SP_type($p['vp_id_distrito'],'int');
        //echo parent::getCall();die();
        
        $data = parent::ExeSP();
        return $data;
    }
}
?>