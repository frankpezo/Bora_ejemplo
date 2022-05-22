<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Pacifico&family=Permanent+Marker&family=Water+Brush&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/login.css">
<title>Bora</title>
</head>
<body>
      <!-- div principal-->
      <div class="login-box">
      <img src="img/icons/greenDos.png" class="img_log">
           <h3>Bora</h3>
       
        
        <!--Formulario-->
          <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
              <input type="text" name="usuario" placeholder="Nombre de usuario" value='<?php  if(isset($usuario)){echo $usuario;}?>' >
              <!---->
              <img class="iconPass" src="img/icons/eye.png" alt="" id="Eye">
              <input type="password" name="contra" id="Input" placeholder="Contraseña">

             
              
              <?php if(!empty($errores)): ?>
                     <div class="error">
                         <ul>
                             <?php echo $errores; ?>
                         </ul>
                     </div>
              <?php endif; ?>

              <input type="submit" value="Iniciar sesión">
               
               <!--link-->
               <a href="registerLogic.php">¿Aún no tienes una cuenta?</a>
          </form>

          <!-- para lo iconos -->
        <div class="social">
             <ul>
                 <li><a href="#"><img src="img/facebook.png"> </a></li>
                 <li><a href="#"><img src="img/instagram.png"> </a></li>
                 <li><a href="#"><img src="img/whatsapp.png"> </a></li>
                </ul>
        </div>
            
      </div><!--Div principal-->

      <script src="js/showPassword.js"></script>
</body>
</html>