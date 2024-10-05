<?php
    require_once 'app/controllers/UsuariosController.php';
    require_once 'app/controllers/LibrosController.php';
    require_once 'app/controllers/AutoresController.php';

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    // leo el parametro accion
    $action = 'home'; // accion por defecto
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];  // action   => about/juan
    }

    // parsea la accion Ej: about/juan --> ['about', 'juan']
    $params = explode('/', $action); // genera un arreglo
    //$usuarioController = new UsuarioController();
    //$librosController = new LibrosController();
    $autoresController = new AutoresController();
    switch ($params[0]) {
        case 'inicio':
            break;
        case 'libros':
            break;
        case 'autores':
            if(isset($params[1]) && $params[1]!=null){
                switch($params[1]){
                    case 'crear':
                        $autoresController->crearAutor();
                        break;
                    case 'enviar':
                        $autoresController->enviar();
                        break;
                    case 'editar':
                        $autoresController->editar($params[2]);
                        break;
                    case 'guardar':
                        $autoresController->guardar();
                        break;
                    case 'eliminar':
                        $autoresController->eliminar($params[2]);
                        $autoresController->verAutores();
                        break;
                    default:
                        $autoresController->verAutor($params[1]);
                        break;
                }
                
            }else{
                $autoresController->verAutores();
            }

            break;
        case 'login':
            break;
        default:
            echo "404 not found";
            break;
    }

?>