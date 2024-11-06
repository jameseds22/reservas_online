<?php
class establecimientoModelo extends PDO_SERVER {
    private $correo;
    private $piolardo;

    public function __construct()
    {
        $this->piolardo = help::read_ini(RAIZ.'login/login.ini', 'piolardo');
        $this->correo = help::read_ini(RAIZ.'login/login.ini', 'correo');
    }

    public function detalle_establecimiento($p)
    {
        parent::unsetPDO();
        parent::SPname('detalle_establecimiento', $this->piolardo);

        parent::SP_type($p['vp_id_establecimiento'],'int');
        //echo parent::getCall();die();
        
        $data = parent::ExeSP();
        return $data;
    }
    public function servicios_x_establecimiento($p)
    {
        parent::unsetPDO();
        parent::SPname('servicios_x_establecimiento', $this->piolardo);

        parent::SP_type($p['vp_id_establecimiento'],'int');
        //echo parent::getCall();die();
        
        $data = parent::ExeSP();
        return $data;
    }

    public function empleados_x_establecimiento($p)
    {
        parent::unsetPDO();
        parent::SPname('empleados_x_establecimiento', $this->piolardo);

        parent::SP_type($p['vp_id_establecimiento'],'int');
        //echo parent::getCall();die();
        
        $data = parent::ExeSP();
        return $data;
    }
    public function agregar_servicios($p) {
        parent::unsetPDO();
        parent::SPname('agregar_servicios', $this->piolardo);

        parent::SP_type($p['vp_id_establecimiento'],'int');
        parent::SP_type($p['vp_id_servicio'],'int');

        //echo parent::getCall();die();
        
        $data = parent::ExeSP();
        return $data;
    }
}
?>