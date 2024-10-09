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
    $autoresController = new AutoresController();
    $librosController = new LibrosController();
    $usuariosController = new UsuariosController();

    switch ($params[0]) {
        case 'inicio':
            $librosController->index();
            break;
        case 'libros':
            if(!empty($params[1])){
                switch($params[1]){
                    case 'crear':
                        $librosController->create();
                        break;
                    case 'enviar':
                        $librosController->store();
                        break;
                    case 'editar':
                        $librosController->edit($params[2]);
                        break;
                    case 'guardar':
                        $librosController->update();
                        break;
                    case 'eliminar':
                        $librosController->destroy($params[2]);
                        break;
                    default:
                        $librosController->show($params[1]);
                        break;
                }
                
            }else{
                $librosController->index();
            }
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
        case 'iniciar-sesion':
            $usuariosController->loginForm();
            break;
        case 'login':
            $usuariosController->login();
            break;
        default:
            echo "404 not found";
            break;
    }

?>