<?php 
    require_once("libs/Smarty.class.php");
    class AutoresView{
        private $smarty;

        function __construct(){
            $this->smarty= new Smarty();
            $this->smarty->assign('base', BASE_URL);
            //TODO:temporal, preguntar si es buena práctica
            $this->smarty->assign("user", AuthHelper::loggedUser());
        }

        function verAutores($autores){
            $titulo="Autores";
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->assign('autores', $autores);
            $this->smarty->display('templates/autores.tpl');
        }
        function verAutor($libros){
            $titulo="Libros del autor";
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->assign('libros', $libros);
            $this->smarty->display('templates/verAutor.tpl');
        }

        function crearAutor(){
            $titulo="Crear autor";
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->display('templates/crearAutor.tpl');
        }

        function editarAutor($autor){
            $titulo="Editar autor";
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->assign('autor', $autor);
            $this->smarty->display('templates/editarAutor.tpl');
        }
    }
?>