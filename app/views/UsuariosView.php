<?php
class UsuariosView{
    private $smarty;
    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base', BASE_URL);
        $this->smarty->assign("user", AuthHelper::loggedUser());
        $this->smarty->assign("isAdmin", AuthHelper::isAdmin());

    }

    public function login(){
        $this->smarty->assign("titulo", "Iniciar Sesión");
        $this->smarty->display("templates/login.tpl");
    }
}
?>