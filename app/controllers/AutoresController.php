<?php
    require_once('app/models/AutoresModel.php');
    require_once('app/views/AutoresView.php');
    class AutoresController {
        private $model;
        private $view;
        function __construct(){
            $this->model= new AutoresModel();
            $this->view= new AutoresView();
        }

        function verAutores(){
            $autores=$this->model->getAutores();
            $this->view->verAutores($autores);
        }

        function verAutor($id){
            $libros=$this->model->getLibrosAutor($id);
            $this->view->verAutor($libros);
        }

        function crearAutor(){
            $this->view->crearAutor();
        }

        function enviar(){
            if(!empty($_POST['nombre']) && !empty($_POST['biografia'])){
                $nombre = $_POST['nombre'];
                $biografia = $_POST['biografia'];
                $imagen="";
                if(empty($_POST['imagen'])){
                    $imagen="https://img.freepik.com/foto-gratis/chico-guapo-seguro-posando-contra-pared-blanca_176420-32936.jpg?w=1380&t=st=1728084474~exp=1728085074~hmac=5e4b0abebdca24f5367b3d99334c582cb0a4fb53b61dcbf454589a609cc395a2";
                }else{
                    $imagen = $_POST['imagen'];
                }
                
        
                $autor = new stdClass();
                $autor->nombre=$nombre;
                $autor->biografia=$biografia;
                $autor->imagen=$imagen;
        
                $this->model->crearAutor($autor);
                header('Location: '.BASE_URL.'autores');
            }else{
                // DEBO MOSTRAR EL ERROR DE QUE HAY UN CAMPO VACIO
            }
        }

        function eliminar($id){
            $this->model->eliminarAutor($id);
            
            header('Location: '.BASE_URL.'autores');
        }

        function editar($id){
            $autor=$this->model->getAutor($id);
            $this->view->editarAutor($autor);
        }

        function guardar(){
            if(!empty($_POST['nombre']) && !empty($_POST['biografia'])){
                $nombre = $_POST['nombre'];
                $biografia = $_POST['biografia'];
                $imagen="";
                $id=$_POST['id'];
                if(empty($_POST['imagen'])){
                    $imagen="https://img.freepik.com/foto-gratis/chico-guapo-seguro-posando-contra-pared-blanca_176420-32936.jpg?w=1380&t=st=1728084474~exp=1728085074~hmac=5e4b0abebdca24f5367b3d99334c582cb0a4fb53b61dcbf454589a609cc395a2";
                }else{
                    $imagen = $_POST['imagen'];
                }
                
        
                $autor = new stdClass();
                $autor->id=$id;
                $autor->nombre=$nombre;
                $autor->biografia=$biografia;
                $autor->imagen=$imagen;
        
                $this->model->guardarAutor($autor);
                
                header('Location: '.BASE_URL.'autores');
            }else{
                // DEBO MOSTRAR EL ERROR DE QUE HAY UN CAMPO VACIO
            }
        }
    }
?>