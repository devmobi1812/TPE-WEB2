<?php
    require_once('config/config.php');
    class Model {

        protected $db;
        //Crea la conexión a la DB
        protected function crearConexion () {
            global $configuracion;
            $host = $configuracion['host'];
            $user = $configuracion['usuario'];
            $password = $configuracion['password'];
            $database = $configuracion['database'];
        
            try {
                $this->db= new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
                $this->deploy();
            } catch (\Throwable $th) {
                die($th);
            }

            return $this->db;
        }

        private function deploy() {
            $query = $this->db->query('SHOW TABLES');
            $tables = $query->fetchAll();
            if(count($tables) == 0) {
                $sql =<<<END
            
                    END;
            $this->db->query($sql);
            }
        }
    


    }

?>
