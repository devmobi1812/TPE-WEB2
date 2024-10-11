<?php
require_once "helpers/AuthHelper.php";
require_once "app/views/UsuariosView.php";
class UsuariosController {
    private $view;
    public function __construct(){
        $this->view = new UsuariosView();
    }
    
    public function loginForm(){
        $this->view->login();
    }
    public function login(){
        $username = $_POST["username"];
        $password = $_POST["password"];
        if(!empty($username)&&!empty($password)){
            $user = new stdClass();
            $user->nombre = $username;
            $user->password = $password;
            AuthHelper::login($user);
            if(AuthHelper::loggedUser()){
                header("Location:".BASE_URL."inicio");
            }else{
                header("Location:".BASE_URL."iniciar-sesion");
            }
        } 
    }

    public function logout(){
        AuthHelper::logout();
        header("Location:".BASE_URL."inicio");
    }
}
?>