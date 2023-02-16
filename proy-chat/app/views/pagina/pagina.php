<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="<?php echo controlador::$rutaAPP?>app/views/pagina/css/estilos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css'>

  <!--Icon-Font-->
  <script src="https://kit.fontawesome.com/bf7fc14a7d.js" crossorigin="anonymous"></script>
</head>
<body>
<a class="nav-link" href="<?php echo controlador::$rutaAPP?>index.php?action=ahomeuser"><?php echo $_SESSION["username"]?></a>
  <a href="<?php echo controlador::$rutaAPP?>index.php?action=cerrar">Cerrar Sesion</a>
	<button class="btn-wsp" target="_blank"><i class="fa-solid fa-message"></i></button> 
      
  <div class="popup">
    <div class="center">
      <div class="contacts">
      <i class="fas fa-bars fa-2x"></i>
        <h2>
          <!-- revisar -->
          Personas en linea (o chats) 
          <!-- revisar -->
        </h2>
        <?php
          require_once __dir__."/../../model/getData.php";
          $conectados=new GetDatos();
        
            $result=$conectados->selectQuery("SELECT * FROM usuarios WHERE status = '1'");
            
              foreach($result as $value){  ?>
             
                  <div class="contact" onClick="click_here(this.id)" id="<?php echo $value['id_user']?>">
                    <div class="pic rogers"></div>
                    <!-- <div class="badge">
                      14
                    </div> -->

                    <div class="name">
                    <?php echo $value['usuario']?>
                    </div>
                    <div class="message">
                        Agregar ultimo mensaje o activo / inactivo
                    </div>
                  </div>   
            <?php 
            }
            ?>
        
    </div>

    <div class="chat" id="cont-chat">
  <div class="contact bar">
                <div class="pic stark"></div>
                <div class="name">
                Chat Puntualmente
                </div>
          </div>
          <div class="messages" id="chat">
          
            <div class="message stark">
              Bienvenido a puntualmente chat 
            </div>
           
          </div>
          <div class="input">
            <i class="fas fa-camera" disabled></i><input placeholder="Type your message here!" type="text" readonly disabled/>
          </div>
  </div>
    
    <script type="text/javascript">
    function click_here(button_id){
      
      alert(button_id);
        document.getElementById('cont-chat').innerHTML = '';
        $('.chat').append(`
        
              <div class="contact bar">
                <div class="pic stark"></div>
                <div class="name">
                  ${button_id}
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

            <div id="new-msg">
              
            </div>
            

            
          </div>
          <div class="input">
            <i class="fas fa-camera"></i><input placeholder="Type your message here!" type="text" id="msg" onkeypress="funcion()"/>
          </div>
        `);
    }
    function funcion(){
      if (event.which === 13) {
        alert('Enter is pressed!');
        $hola=document.getElementById('msg').value;
        document.getElementById('new-msg').innerHTML = '';
        $('#new-msg').append(`
              <div class="message parker" id="new-msg">
              ${$hola}
              </div>
        `);
        document.getElementById("msg").value = "";

    }
    };
  </script>

</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script  src="./script.js"></script>
  </div>


</body>
</html>