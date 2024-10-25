<?php
function url_RewriteEngine()
{
    $url_decode = array();
    $url = parse_url($_SERVER['REQUEST_URI'])['path'];
    $method = $_SERVER['REQUEST_METHOD'];
        
    foreach (explode("/", $url) as $param)
        if ($param != ''){
            $url_decode[] = $param;
        }
    return $url_decode;
}

function url_RewriteEngine_data()
{
    $url_decode = array();
    $url = parse_url($_SERVER['REQUEST_URI'])['path'];
    $method = $_SERVER['REQUEST_METHOD'];

    switch ($method) {
        //opteniendo todos el contenido de post o de get
        case 'POST':
            $url_uri = $_POST;
            break;
        case 'GET':
            $url_uri = $_GET;
            break;
    }
    foreach ($url_uri as $idx => $v) {
        $url_decode[$idx] = $v;
    }
    
    return $url_decode;
}

$Url_Ruta = url_RewriteEngine();
//var_export($Url_Ruta);die();
$Url_Data = url_RewriteEngine_data();

//$sistemas = trim($Url_Ruta[0]) != '' ? $Url_Ruta[0] : 'login';
$sistemas = trim(isset($Url_Ruta[0])) == true ? $Url_Ruta[0] : 'inicio';


$PHP_controller = trim(isset($Url_Ruta[1])) == true ? $Url_Ruta[1] : 'inicio';

define('RAIZ','/sistemas/reservas_online/');
define('RAIZ_SISTEMAS', RAIZ . 'aplicaciones/sistemas/');
/*Ruta para encontrar los archivos*/
define('CARPETA_VISTA', RAIZ_SISTEMAS . $sistemas . '/vista/');

$CARPETA_MODELO = RAIZ_SISTEMAS . $sistemas . '/modelo/';
$CARPETA_CONTROLADOR = RAIZ_SISTEMAS . $sistemas . '/controlador/';

/*Nombre Adicionar para la clase de los archivos para que no puedan accedar directo al archivo
 y para validar que la clase exista
*/
$claseModelo = $PHP_controller  . 'Modelo';
$claseControladora = $PHP_controller  . 'Controlador';

define('FILE_CONTROLADOR', $CARPETA_CONTROLADOR . $claseControladora . '.php');
define('FILE_MODELO', $CARPETA_MODELO . $claseModelo . '.php');

define('USER_AGENT', $_SERVER['HTTP_USER_AGENT'] );

//define('TOKEN', 'SyndFB33hUQuA2mksOI9Owlfj1E2QU');
define('SECRET_KEY', 'A23pMMzqIMPxhee9M3YoQ9SFYTFHTYURdfKNG');//por validar

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);
//ini_get('display_errors', '1');

try{
    
    $fn_class = isset($Url_Ruta[2]) == false ? 'default' : $Url_Ruta[2];
    
    $ruta = isset($Url_Ruta[0]) == false ? '' : $Url_Ruta[0];

    if(!file_exists(FILE_CONTROLADOR)){

        throw new Exception('Archivo Controlador no encontrado', 404);
    }else if (!file_exists(FILE_MODELO)){
        
        throw new Exception('Archivo Modelo no encontrado', 404);
    }
    require_once FILE_CONTROLADOR;
    require_once FILE_MODELO;
    
    if(!class_exists($claseControladora)){
        throw new Exception('Clase controladora no encontrado', 404);
    }
    
    $new_controlador = new $claseControladora();
    
    if(!method_exists($new_controlador, $fn_class)){
        
        throw new Exception('No exixte la funcion de la clase', 404);
    } else {
        $Url_Data = array_merge($Url_Data, $Url_Ruta);
        // var_export($Url_Data);
        // echo '<br>';
        // echo $fn_class;
        // echo '<br>';
        // var_export($new_controlador);
        // echo '<br>';
        echo $new_controlador -> $fn_class($Url_Data);
    }
} catch(Exception $e) {
    require_once RAIZ. '/publico/errores/error.php';
}
?>
