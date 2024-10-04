<?php
    require_once 'app/controllers/task.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// leo el parametro accion
$action = 'home'; // accion por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];  // action   => about/juan
}

// parsea la accion Ej: about/juan --> ['about', 'juan']
$params = explode('/', $action); // genera un arreglo
    
switch ($params[0]) {
    case 'home':
        $controller = new TaskController();
        $controller->showListTask();
        break;
    case 'nuevaTarea':
        $controller = new TaskController();
        $controller->insertar();
        break;
    case 'editar':
        $controller = new TaskController();
        if (isset($params[1])){
            $controller->editarTarea($params[1]);
        } else{
            $controller->showListTask();
        }
        break;
    case 'modificar':
        $controller = new TaskController();
        $controller->modificar();
        break;
    case 'eliminar':
        $controller = new TaskController();
        if (isset($params[1])){
            $controller->borrar($params[1]);
        } else{
            $controller->showListTask();
        }
        break;
    default:
        echo "404 not found";
        break;
}