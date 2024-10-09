<?php
require_once "libs/Smarty.class.php";
class LibrosView{
    private $smarty;
    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base', BASE_URL);
    }

    public function index($libros, $isAdmin){
        $this->smarty->assign('titulo', "Libros");
        $this->smarty->assign("libros", $libros);
        $this->smarty->assign("isAdmin", $isAdmin);
        $this->smarty->display("templates/libros.tpl");
    }

    public function show($libro, $isAdmin){
        $this->smarty->assign('titulo', $libro->titulo);
        $this->smarty->assign("libro", $libro);
        $this->smarty->assign("isAdmin", $isAdmin);
        $this->smarty->display("templates/verLibro.tpl");
    }

}
?>