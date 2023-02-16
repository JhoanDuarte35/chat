<?php

require_once __dir__.'/../model/getData.php';

class controlador{
    public static $rutaAPP="/proy-chat/";

    public function iniciar_sesion(){

        if(!isset($_SESSION)){
            session_start();
        }

        if(isset($_SESSION["id_usuario"])){
            return true;
        }
        return false;
    }

    public function pagina(){
        include_once(__dir__."/../views/pagina/pagina.php");
    }

    public function login(){
        include_once(__dir__."/../views/login/login.php");
    }

    public function validar(){
        include_once(__dir__."/../views/login/php/validarlogin.php");
    }

    public function chat(){
        include_once(__dir__."/../views/pagina/php/chat.php");
    }

    function cerrar_sesion(){
        if(!isset($_SESSION)){
            session_start();
        }
        $cerrarsession = new GetDatos();
        $cerrarsession->update_query("update usuarios set status='0' where usuario='".$_SESSION["username"]."'");
        session_destroy();
        header('Location: '.controlador::$rutaAPP.'index.php/login');
    }

    public function index(){
        session_destroy();
        include_once(__dir__."/../views/login/login.php");
    }

}
?>