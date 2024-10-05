<?php
    require_once('config/config.php');
    class Model {

        //Crea la conexión a la DB
        protected function crearConexion () {
            global $configuracion;
            $host = $configuracion['host'];
            $user = $configuracion['usuario'];
            $password = $configuracion['password'];
            $database = $configuracion['database'];
        
            try {
                $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
            } catch (\Throwable $th) {
                die($th);
            }

            return $pdo;
        }


    }

?>
