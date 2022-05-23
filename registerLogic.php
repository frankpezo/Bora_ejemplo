<?php
 //1. Iniciamos sesión
 session_start();

 //1.1. Creamos una condiconal para que el usuario no ingrese directamente a la página
 if(isset($_SESSION['usuario'])){
      header('Location: principalLogic.php');
 }

 //2. Creamos la condicional de envio
 if($_SERVER['REQUEST_METHOD']=='POST'){
     //Traemos los datos del formulario
      $usuario= filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
      $contra= $_POST['contra'];
      $contraDos= $_POST['contraDos'];

      //Creamos una variable en donde guardaremos el error
      $errores ='';

      //3. Comprobamos que los campos no estén vacios 
        if(empty($usuario) or empty($contra) or empty($contraDos)){
              $errores .='<li>Los campos no deben quedar vacíos</li>';
        }else{
              //3.1. Encriptamos la contraseña
              $contra= hash('sha512', $contra);
              $contraDos= hash('sha512', $contraDos);
             

              //3.2. Realizamos la comprabación si la contraseña coincide en ambos campos
              if($contra != $contraDos){
                   $errores .='<li>Las contraseñas no coinciden</li>';
              }
        }

        //4. Mandamos los datos a la base de datos
        if($errores ==''){
             //Llamamos el archivo donde se encuentra el método
             require 'usuario.php';
             $usuarioCreado= new Usuario();
             $inser = $usuarioCreado->insertUsuario($usuario, $contra);

             //Insertado los datos, mandamos al usuario a iniciar sesión 
             header('Location: loginLogic.php');
        }

 }//condiconalPrincipal



 require 'view/register.php';

?>