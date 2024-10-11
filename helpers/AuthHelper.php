<?php 
require_once "app/models/UsuariosModel.php";
    class AuthHelper{
        private static $userModel;

        public static function loadModel(){
            if(self::$userModel == null){
                self::$userModel = new UsuariosModel();
            }
        }
        public static function login($user){
            self::loadModel();
            $fetchedUser = self::$userModel->findByUsername($user->nombre);
            if(!empty($fetchedUser)){
                if(password_verify($user->password, $fetchedUser->password)){
                    if (session_status() == PHP_SESSION_NONE) {
                        session_start();
                    }
                    $_SESSION["user"] = $fetchedUser;
                }
            }
        }

        public static function logout(){
            if(session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
            //  Si usuario esta definido, cerrar session.
            if(isset($_SESSION['user'])){
                session_destroy();
            }
            
        }
        public static function loggedUser(){
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            return $_SESSION["user"] ?? false;
        }

        public static function isAdmin(){
            $user = self::loggedUser();
            return ($user) ? $user->rol_nombre == 'ADMIN' : false;
        }
    }
?>