<?php
require_once "app/models/LibrosModel.php";
require_once "app/models/AutoresModel.php";
require_once "app/views/LibrosView.php";
require_once "helpers/AuthHelper.php";

class LibrosController {
    private $model;
    private $view;
    private $autoresModel;

    function __construct(){
        $this->model = new LibrosModel();
        $this->autoresModel = new AutoresModel();
        $this->view = new LibrosView();
    }

    public function index(){
        $this->view->index($this->model->all(), AuthHelper::isAdmin());
    }

    public function show($id){
        $libro = $this->model->find($id);
        if($libro){
            $this->view->show($libro, AuthHelper::isAdmin());
        }else{
            echo "libro con isbn ".$id." no encontrado";
        }
    }

    public function create(){
        $isAdmin = AuthHelper::isAdmin();
        if($isAdmin){
            $this->view->create($this->autoresModel->getAutores(), $isAdmin);
        }else{
            header("Location: /login");
            die();
        }
    }

    public function store(){
    }

    public function edit($id){
        $isAdmin = AuthHelper::isAdmin();
        $libro = $this->model->find($id);
        if($isAdmin){
            if($libro){
                $this->view->edit($libro, $this->autoresModel->getAutores(), $isAdmin);
            }else{
                echo "libro con isbn ".$id." no encontrado";
            }
        }else{
            header("Location: /login");
            die();
        }
    }
    public function update(){

    }

    public function destroy($id){
        if(AuthHelper::loggedUser()){
            $this->model->delete($id);
            header("Location: /libros");
            die();
        }else{
            header("Location: /login");
            die();
        }
    }
}
?>