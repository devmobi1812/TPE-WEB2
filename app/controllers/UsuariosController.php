<?php
require_once "helpers/AuthHelper.php";
require_once "app/views/UsuariosView.php";
require_once "app/models/UsuariosModel.php";
class UsuariosController {
    private $view;
    private $model;
    public function __construct(){
        $this->view = new UsuariosView();
        $this->model = new UsuariosModel();
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }
    
    public function loginForm(){
        $errors = $_SESSION["errors"] ?? [];
        $this->view->login($errors);
    }
    public function login(){
        unset($_SESSION['errors']['login']);

        if(empty($_POST["username"])||empty($_POST["password"])){
            $_SESSION['errors']['login'] = "Por favor rellene todos los campos para iniciar sesión"; 
            header("Location:".BASE_URL."iniciar-sesion");
            die();
        }

        $user = new stdClass();
        $user->nombre = $_POST["username"];
        $user->password = $_POST["password"];
        AuthHelper::login($user);
        if(!AuthHelper::loggedUser()){
            $_SESSION['errors']['login'] = "Nombre de usuario y/o contraseña incorrecta"; 
            header("Location:".BASE_URL."iniciar-sesion");
            die();
        }

        header("Location:".BASE_URL."inicio");
        die();
    }

    public function logout(){
        AuthHelper::logout();
        header("Location:".BASE_URL."inicio");
    }


    //  ESTE REGISTRAR ES TEMPORAL, PQ EN REALIDAD HAY QUE HACERLO MEDIANTE UNA PAGINA DE REGISTRACION, Y OBTENER LOS DATOS DE UN FORMULARIO PARA PODER CREAR EL USUARIO.
    //  PERO COMO NO ERA UNA TAREA A REALIZAR, SIMPLEMENTE HICIMOS ESTE METODO PARA MOSTRAR EL TEMA DEL HASHEO Y DE COMO SE CREO EL USUARIO WEBADMIN
    
    function registrarTMP(){  
        $nombre="webadmin";
        $password="admin";
        $verificarPassword="admin";
        $rol=1;

        if($password==$verificarPassword){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            
            $usuario=new stdClass();
            $usuario->nombre=$nombre;
            $usuario->password=$hash;
            $usuario->rol=$rol;

            $this->model->create($usuario);
        }else{
            return print("Error, las contraseñas no son iguales");
        }
    }
}
?>