<?php 
require_once 'app/config.php';




//Parámetro action enviado desde nuestro frontend (javascript)
//Debe ser recibido en ajax.php
//Validaremos que el valor de action concuerde con el nombre de la función
//Si existe la función, se ejecuta dicha función y listo

//en caso de no existir la función o no recibir el paramtro
//por defecto mandarems un error 403 de acceso no autorizado


try {
    if(!isset($_POST['action']) && !isset($_GET['action'])){
        throw new Exception("El acceso no está autorizado");
    }

    //Guardar el valor de action
    $action = isset($_POST['action']) ? $_POST['action'] : $_GET['action'];
    $action = str_replace('-', '_', $action);
    $function = sprintf('hook_%s', $action);

    if(!function_exists($function)){
        throw new Exception ("El acceso no esta autorizado");
    }

    // Se ejecuta la función
    $function();

} catch (Exception $e){
    json_output(json_build(403, null, $e->getMessage()));
}
?>