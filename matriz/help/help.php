<?php
class help extends PDO_SERVER {
    private $piolardo;

    public function __construct()
    {

    }
    
    /*Manejo de la session*/
    public function core_ses()
    {
        $getSesion = new session_core();
        $getSesion->getSesion();
    }

    public function core_sesion_destroy()
    {
        session_core::destroyCore();
    }

    public function core_valida_Sumit()
    {
        return session_core::time_form();
    }

    public function core_regenerate_csrf_token()//temporal
    {
        session_core::regenerate_csrf_token();
    }

    /*Manejo de Utilitarios*/
    public static function read_ini($file_, $name_ini = '')
    {
        $array = parse_ini_file($file_, true);
        $resul_ini = array();
        if ( trim($name_ini) != '' ){
            foreach( $array as $idx => $v ){
                if ( trim($idx) == $name_ini ){
                    $resul_ini = $v;
                }
            }
        }
        //var_export($resul_ini);
        return $resul_ini;
    }

    public static function get_Ip()
    {
        $ip = "";
        if(isset($_SERVER)) {
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $ip=$_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                $ip=$_SERVER['REMOTE_ADDR'];
            }
        } else {
            if ( getenv( 'HTTP_CLIENT_IP' ) ) {
                $ip = getenv( 'HTTP_CLIENT_IP' );
            } elseif ( getenv( 'HTTP_X_FORWARDED_FOR' ) ) {
                $ip = getenv( 'HTTP_X_FORWARDED_FOR' );
            } else {
                $ip = getenv( 'REMOTE_ADDR' );
            }
        }
        if(strstr($ip,',')) {
            $ip = array_shift(explode(',',$ip));
        }
        return $ip;
    }

    public static function UTF8($a, $skep = array())
    {
        $rs = array();
        foreach($a as $idx1 => $value){
            foreach($value as $idx2 => $value01 ){
                if (!in_array($idx2, $skep))
                    //$value01 = str_replace('"', '&#34;', $value01);
                    $value01 = str_replace("'", "&#39;", $value01);
                    $value01 = str_replace('"', '\"', $value01);
                    //$value01 = addcslashes($value01,'"');
                    $rs[$idx1][$idx2] = utf8_encode(trim($value01));
                    //$rs[$idx1][$idx2] = trim($value01);
            }
        }
        return $rs;
    }

    public function getFile($archivo = '', $p = array())
    {
        /*echo CARPETA_VISTA.'<br>';
        echo $archivo;
        die();*/
        try{
            if (!file_exists(CARPETA_VISTA . $archivo)){
                throw new Exception('El Archivo de la vista no existe', 404);
            }else{

                $this->header($p);
                require_once CARPETA_VISTA . $archivo;
                $this->footer($p);
            }
        } catch (Exception $e) {
            require_once RAIZ . 'publico/errores/error.php';
        }
    }

    public function header($p)
    {
        require_once RAIZ . 'aplicaciones/sistemas/inicio/vista/header/header.php';
    }

    public function footer($p)
    {
        require_once RAIZ . 'aplicaciones/sistemas/inicio/vista/footer/footer.php';
    }
    public function PHPMailer($p)
    {
        //echo RAIZ;die();
        require RAIZ.'matriz/help/PHPMailer/src/Exception.php';
        require RAIZ.'matriz/help/PHPMailer/src/PHPMailer.php';
        require RAIZ.'matriz/help/PHPMailer/src/SMTP.php';
        
    }
    public function writeToLog($filename,$mensaje)
    {
        $ruta = RAIZ . 'logCore/';
        // Agregar una marca de tiempo al mensaje
        $timestamp = date('Y-m-d H:i:s');
        $logEntry = "[" . $timestamp . "] - " . PHP_EOL. $mensaje . PHP_EOL;
        // Escribir el mensaje en el archivo
        file_put_contents($ruta.$filename, $logEntry, FILE_APPEND);
    }
    public function array_unique($rs,$id_busqueda){
        $clasificaciones_encontradas = array();
        $clasificaciones_unicas = array();

        foreach ($rs as $fila) {
            $id_clasi_nom_clasi = $fila[$id_busqueda];
            if (!in_array($id_clasi_nom_clasi, $clasificaciones_encontradas)) {
                $clasificaciones_encontradas[] = $id_clasi_nom_clasi;
                $clasificaciones_unicas[] = $fila;
            }
        }
        return $clasificaciones_unicas;
    }

    public function header_Json($p)
    {
        //header('Content-Type: application/json');
        header('Content-Type: application/json; charset=utf-8');
        return json_encode($p,JSON_UNESCAPED_UNICODE);
        //return json_encode($p);
    }
}

?>
