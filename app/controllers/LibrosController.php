<?php
require_once "app/models/LibrosModel.php";
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
    }

    public function store(){
    }

    public function edit($id){

    }
    public function update(){

    }

    public function destroy($id){

    }
}
?>