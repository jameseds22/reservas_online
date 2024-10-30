<?php
class headerControlador extends help 
{
    private $Modelo;

    public function __construct()
    {
        $this->core_ses();
        $this->Modelo = new headerModelo();
    }

    /*public function header($p)//temporal
    {
        $this->getFile('header/header.php', $p);
    }*/

    public function verificar_credenciales($p) 
    {
        $rs = $this->Modelo->verificar_credenciales($p);
        if($rs[0]['error_sql'] > 0){
            session_start();
            $_SESSION['id_usr'] = $rs[0]['id_usr'];
            $_SESSION['tipo_user'] = $rs[0]['tipo_usr'];
            $_SESSION['nombre'] = $rs[0]['nom_usr'];
        }else{
            session_start();
            $_SESSION['id_usr'] = '0';
            $_SESSION['tipo_user'] = '1';
            $_SESSION['nombre'] = '';
        }
        $array = [];
        foreach ($rs as $key => $v){
            $array[] = $v;
        }
        unset($array[0]['id_usr']);
        $data = array(
            'success' => true,
            'total' => count($array),
            'data' => $array
        );
        return $this->header_Json($data);
    }

    public function cerrar_session($p){
        session_destroy();
    }

    public function registrar_usuario($p) 
    {
        $rs = $this->Modelo->registrar_usuario($p);
        $array = [];
        foreach ($rs as $key => $v){
            $array[] = $v;
        }
        $data = array(
            'success' => true,
            'total' => count($array),
            'data' => $array
        );
        return $this->header_Json($data);
    }

}
?>