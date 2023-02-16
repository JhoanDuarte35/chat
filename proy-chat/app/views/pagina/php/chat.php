<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo controlador::$rutaAPP?>app/views/pagina/css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css'>
</head>
<body>

    <?php 
    require_once __dir__."/../../../model/getData.php";
    if(isset($_POST["id_user"])){ 
     $usuariosDatos=new GetDatos();
     $result=$usuariosDatos->selectQuery("SELECT * FROM usuarios WHERE id_user='".$_POST["id_user"]."'");

    }
        ?>
    <div class="chat" id="cont-chat">
        <div class="contact bar">
                    <div class="pic stark"></div>
                    <div class="name">
                    Tony Stark
                    </div>
                <div class="seen">
                Today at 12:56
                </div>
            </div>
            <div class="messages" id="chat">
                <div class="time">
                Today at 11:41
                </div>
                <div class="message parker">
                Hey, man! What's up, Mr Stark? 👋
                </div>
                <div class="message stark">
                Kid, where'd you come from? 
                </div>
                <div class="message parker">
                Field trip! 🤣
                </div>
                <div class="message parker">
                Uh, what is this guy's problem, Mr. Stark? 🤔
                </div>
                <div class="message stark">
                Uh, he's from space, he came here to steal a necklace from a wizard.
                </div>
                
            </div>
            <div class="input">
                <i class="fas fa-camera"></i><input placeholder="Type your message here!" type="text" />
            </div>
        </div>
    
</body>
</html>