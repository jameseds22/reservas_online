<?php
class session_core
{
    public function __construct()
    {
        session_start();
        //var_export($_SESSION);
        if (isset($_SESSION['id_usr'])){
            define('ID_USR', $_SESSION['id_usr']);
            define('TIPO_USR', $_SESSION['tipo_user']);
            define('EMAIL', $_SESSION['email']);
            define('USERNAME', $_SESSION['username']);
            define('USER_NAME', $_SESSION['nombre']);
        }else{
            define('ID_USR', '0');
            define('TIPO_USR', '1');
            define('EMAIL', '');
            define('USERNAME', '');
            define('USER_NAME', '');
        }
 
        if (!isset($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
            define('CSRF_TOKEN', $_SESSION['csrf_token']);
        }else{
            define('CSRF_TOKEN', $_SESSION['csrf_token']);   
        }
 
        if (!isset($_COOKIE['uniqid_carrito'])) {//por validar
            $uniqid_carrito = bin2hex(random_bytes(16)); // Generar un ID único seguro
            setcookie('uniqid_carrito', $uniqid_carrito, time() + (86400 * 30), "/"); // La cookie expira en 30 días
            define('UNIQID_SES', $uniqid_carrito);
        } else {
            $uniqid_carrito = $_COOKIE['uniqid_carrito'];
            define('UNIQID_SES', $uniqid_carrito);
        }
    }
 
    public static function regenerate_csrf_token()
    {
        session_start();
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
 
    public static function time_form()
    {
        session_start();
        $tiempo_espera = 3; // Segundos de espera entre peticiones
        if (isset($_SESSION['ultimo_submit']) && (time() - $_SESSION['ultimo_submit']) < $tiempo_espera) {
            return array('error_sql' => '-1', 'error_info' => 'Demasiadas solicitudes. Por favor, espera unos segundos.');
            //die('Demasiadas solicitudes. Por favor, espera unos segundos.');
        }
        $_SESSION['ultimo_submit'] = time();
        return array('error_sql' => '1', 'error_info' => 'OK');
    }

    public  function getSesion()
    {
        session_start();
    }

    public static function destroyCore()
    {
        session_start();
        session_destroy();
    }
}
?>
 