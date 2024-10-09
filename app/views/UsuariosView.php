<?php
class UsuariosView{
    private $smarty;
    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base', BASE_URL);
    }

    public function login(){
        $this->smarty->assign("titulo", "Iniciar Sesión");
        $this->smarty->display("templates/login.tpl");
    }
}
?>