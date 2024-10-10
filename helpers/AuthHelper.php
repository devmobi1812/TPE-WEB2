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
                    session_unset();
                    $_SESSION["user"] = $fetchedUser;
                }
            }
        }
        public static function loggedUser(){
            if(session_status() == PHP_SESSION_ACTIVE){
                return $_SESSION["user"] ?? false;
            }else{
                return false;
            }
        }

        public static function isAdmin(){
            $user = self::loggedUser();
            return ($user) ? $user->rol_nombre == 'ADMIN' : false;
        }
    }
?>