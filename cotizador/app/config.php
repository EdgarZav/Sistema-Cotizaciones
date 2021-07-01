<?php
session_start();
//Para saber si estamos en servidor local
define('IS_LOCAL'   ,in_array($_SERVER['REMOTE_ADDR'],['127.0.0.1', '::1']));
define('URL'        , (IS_LOCAL ? 'https://localhost/estadia/cotizador/' : 'LA URL DE SU SERVIDOR EN PRODUCCIÓN'));

//Rutas para carpetas
define('DS'         , DIRECTORY_SEPARATOR); // solo es un backslash
define('ROOT'       , getcwd().DS); // obtiene la carpeta actual en la que se esté ejecutando el código
define('APP'        , ROOT.'app'.DS); // root\app\
define('ASSETS'     , ROOT.'assets'.DS);

define('TEMPLATES'  , ROOT.'templates'.DS);
define('INCLUDES'   , TEMPLATES.'includes'.DS);
define('MODULES'    , TEMPLATES.'modules'.DS);
define('VIEWS'      , TEMPLATES.'views'.DS);
define('UPLOADS'   , 'assets/uploads/');


//Para archivos que vayamos a incluir en header o footer (css o js)
define('CSS'    , URL.'assets/css/');
define('IMG'    , URL.'assets/img/');
define('JS'     , URL.'assets/js/');

//Personalizaciòn
define('APP_NAME', 'Cotizador App');
define('COMPANY', 'TELDYR');
define('PSW', 'Z4val4098.');
define('APP_EMAIL', 'edgarzavaala@gmail.com');
define('TAXES_RATE', 16);
define('SHIPPING', 99.50);
//define
//define

//Autoload composer
require_once ROOT.'vendor/autoload.php';

// cargar todas las funciones
require_once APP.'functions.php';
