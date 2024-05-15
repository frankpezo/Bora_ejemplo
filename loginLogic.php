<?php
//Iniciamos sesión
session_start();

//Para que el usuario no pueda ingresar directamente
if(isset($_SESSION['usuario'])){
     header('Location: principalLogic.php');
}

require 'conexion.php';
//Creamos variable del error
$errores= '';

//1. Creamos condicional de envío
if($_SERVER['REQUEST_METHOD']=='POST'){
    //1.1. Traemos los campos del formulario
     $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
     $contra = $_POST['contra'];
     //$contra=hash('sha512', $contra);
     //Hasheamos la contraseña
   

     


     //2. Comprobamos que los campos no estén vacíos. 
     if(empty($usuario) or empty($contra) ){
          $errores .= '<li>Los campos no pueden estar vacíos </li>';
     
        }else{
          require 'usuario.php';
          $usuarioInsertado= new Usuario();
          $login = $usuarioInsertado->login($usuario, $contra);


            if($login !==false){
                $_SESSION['usuario']=$usuario;
                header('Location: principalLogic.php');
             }else{
                $errores .= "<li>Los datos no coinciden</li>";
             }
     }


}//condicionalPrincipal



//llamamos el archivo de vista
require ('view/login.php');
?>