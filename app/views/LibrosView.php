<?php
require_once "libs/Smarty.class.php";
class LibrosView{
    private $smarty;
    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base', BASE_URL);
        $this->smarty->assign("user", AuthHelper::loggedUser());
        $this->smarty->assign("isAdmin", AuthHelper::isAdmin());
    }

    public function index($libros){
        $this->smarty->assign('titulo', "Libros");
        $this->smarty->assign("libros", $libros);
        $this->smarty->display("templates/libros.tpl");
    }

    public function show($libro){
        $this->smarty->assign('titulo', $libro->titulo);
        $this->smarty->assign("libro", $libro);
        $this->smarty->display("templates/verLibro.tpl");
    }
    public function create($autores){
        $this->smarty->assign('titulo', "Nuevo libro");
        $this->smarty->assign("autores", $autores);
        $this->smarty->display("templates/crearLibro.tpl");
    }

    public function edit($libro, $autores, $old_isbn){
        $this->smarty->assign('titulo', "Editar ".$libro->titulo);
        $this->smarty->assign("libro", $libro);
        $this->smarty->assign("autores", $autores);
        $this->smarty->assign("old_isbn", $old_isbn);
        $this->smarty->display("templates/editarLibro.tpl");
    }

}
?>