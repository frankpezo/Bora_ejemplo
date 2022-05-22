<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Pacifico&family=Permanent+Marker&family=Water+Brush&display=swap" rel="stylesheet">
    <title>Bora</title>
</head>
<body>
    <!--Creamos un box para poner el formulario -->
     <div class="login-box">
     <img class="img_log" src="img/icons/greenDos.png" alt="">
        <h3>Bora</h3>
      
          <!--Fromulario--->
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
           <input type="text" name="usuario"  id="" placeholder="Nombre de usuario">
           <!---->
           <img class="iconPass" src="img/icons/eye.png" alt="" id="Eye">
           <input type="password" name="contra" id="Input" placeholder="Contraseña">
           <!---->
           <img class="iconPassDos" src="img/icons/eye.png" alt="" id="EyeDos">
           <input type="password" name="contraDos" id="InputDos" placeholder="Repite contraseña">
           
    
           <!-- Para mostar el error -->
            <?php if(!empty($errores)):?>
                 <div class="error">
                     <ul>
                         <?php echo $errores; ?>
                     </ul>
                 </div>
            <?php endif; ?>

           <input type="submit" value="Registrarse">
            <!--link-->
              <a href="loginLogic.php">¿Ya tienes cuenta?</a>
        </form>
 
        <!-- para lo iconos -->
        <div class="social">
             <ul>
                 <li><a href="#"><img src="img/facebook.png"> </a></li>
                 <li><a href="#"><img src="img/instagram.png"> </a></li>
                 <li><a href="#"><img src="img/whatsapp.png"> </a></li>
                </ul>
        </div>



     </div><!-- DivPrincipal-->
     
 <script src="js/showPassword.js"></script>
</body>
</html>