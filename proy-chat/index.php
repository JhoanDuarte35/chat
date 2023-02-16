<?php

require_once __dir__.'/app/controller/controlador.php';

$userPuntualmente = new controlador();
date_default_timezone_set("America/Bogota");

if($userPuntualmente->iniciar_sesion()){

    if(isset($_GET["action"]) && $_SESSION["rol"]==1){
        
        switch($_GET["action"]){
            case 'home':
                $userPuntualmente->pagina();
                break;
            case 'cerrar':
                $userPuntualmente->cerrar_sesion();
                break;
            case 'chat':
                $userPuntualmente->chat();
                break;
            default:
                $userPuntualmente->pagina();
                break;
        }
    }

    else if (isset($_GET["action"])&&$_SESSION["rol"]==2){

        switch ($_GET["action"]){
            case 'home':
                $userPuntualmente->pagina();
                break;
            case 'cerrar':
                $userPuntualmente->cerrar_sesion();
               break;
            default:
                $userPuntualmente->pagina();
                break;
        }
    }

    else{
        $userPuntualmente->cerrar_sesion();
    }

}else{

    if(isset($_GET["action"])){
        switch ($_GET["action"]){
            case 'login':
                $userPuntualmente->login();
                break;
            case 'validar':
                $userPuntualmente->validar();
                break;
            default:
                $userPuntualmente->index();
                break;
        }
    }else{
        $userPuntualmente->index();
    }
}


?>