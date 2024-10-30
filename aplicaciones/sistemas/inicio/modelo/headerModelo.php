<?php
class headerModelo extends PDO_SERVER {
    private $piolardo;

    public function __construct()
    {
        $this->piolardo = help::read_ini(RAIZ.'login/login.ini', 'piolardo');
    }

    public function verificar_credenciales($p)
    {
        $p['contrasena'] = sha1($p['contrasena']);
        parent::unsetPDO();
        parent::SPname('verificar_credenciales', $this->piolardo);

        parent::SP_type($p['correo_usuario'],'char');
        parent::SP_type($p['contrasena'],'char');
        //echo parent::getCall();die();
        $data = parent::ExeSP();
        return $data;
    }
    public function registrar_usuario($p)
    {
        $p['vp_pass'] = sha1($p['vp_pass']);
        parent::unsetPDO();
        parent::SPname('registrar_usuario', $this->piolardo);

        parent::SP_type($p['vp_nom_user'],'char');
        parent::SP_type($p['vp_correo'],'char');
        parent::SP_type($p['vp_pass'],'char');
        parent::SP_type($p['vp_tel_user'],'char');
        parent::SP_type(1,'int');

        //echo parent::getCall();die();
        $data = parent::ExeSP();
        return $data;
    }
}
?>