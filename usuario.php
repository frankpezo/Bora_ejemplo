<?php
 //Llamamos al archivo que contiene la conexión a la bd
 require_once ('conexion.php');

 //1. Creamos la clase usuario
 class Usuario extends  Conexion{
      //2. Colocamos los campos que tiene la base de datos
      private $strUsuario;
      private $strContra;
      private $conexion;
      public  $errores='';

      //3. Constructor
      public function __construct(){
          //3.1. Creamos el objeto de tipo conexión
          $this->conexion = new Conexion(); //Instanciamos de la clase principal
          $this->conexion = $this->conexion->connect();
      }//constructor

      //4. Creamos método para insertar usuario a la bd
      public function insertUsuario(string $usuario, string $contra){
          //Pasamos las variables
          $this->strUsuario=$usuario;
          $this->strContra = $contra;

          //Colocamos la instrucción SQL
          $sql="INSERT INTO usuarios(nombreuser, contrauser) VALUES(?,?)";
          $insert = $this->conexion->prepare($sql);
          $arrData= array($this->strUsuario, $this->strContra);
          $resInsert = $insert->execute($arrData);
          $idInsert= $this->conexion->lastInsertId();

          return $idInsert;
      }


//5. Para conseguir el usuario e iniciar sesión
/*public function login(string $usuario,  $contra){
      //Pasamos las variables
    // $contra= hash('512', $contra);
     $sql ="SELECT * from bora.usuarios where nombreuser= :usuario AND contrauser= :contra";
     $log = $this->conexion->prepare($sql);
     $log->execute(array(
         ':usuario' =>$usuario,
         ':contra'=> $contra
         
     ));

     $result = $log->fetch(PDO::FETCH_ASSOC);
     return  $result;   
    } */

    public function login(string $usuario,  $contra){
      //Pasamos las variables
    
     $sql ="SELECT * from bora.usuarios where nombreuser= :usuario AND contrauser=:contra";
     $log = $this->conexion->prepare($sql);
     $log->execute(array(
         ':usuario' =>$usuario,
         ':contra' =>$contra
     ));

     $result = $log->fetch(PDO::FETCH_ASSOC);
      
     return $result;
    } 

   
    






 }//finalClase


















?>