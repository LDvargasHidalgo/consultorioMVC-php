<?php
// require_once "controlador/plantilla.controlador.php";
// $plantilla = new ControladorPlantilla();
// $plantilla->ctrPlantilla();

    require_once ('config/Config.php');

    $url = !empty($_GET['url']) ? $_GET['url'] :'Home/Home' ;
    $arrUrl = explode('/', $url);
    $controller = $arrUrl [0];
    $method = $arrUrl [0];
    $params = '';

    if (!empty($arrUrl [1])) 
    {
        if ($arrUrl [1] != "") 
        {
            $method = $arrUrl [1];
        }

        
    }

    if (!empty($arrUrl [2])) 
    {
        if ($arrUrl [2] != "") 
        {
            for ($i=2; $i < count($arrUrl); $i++) { 
                $params .= $arrUrl[$i] . ',';
            
            }
            $params = trim($params,',');
            
        
        }

        
    }

    require_once("Libraries/Core/Autoload.php");

    require_once("Libraries/Core/Load.php");



?>

