<?php

//1. Creamos la conexión en la base de datos
class Conexion{
  //2. Propiedades
  private $host ="localhost";
  private $user ="root";
  private $password="";
  private $db= "bora";
  private $conect;

  //3. Constructor
  public function __construct(){
      //3.1. Usamos las variables
      $conectionString ="mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
      //3.2. Usamos try-catch
      try{
              //Ahora sí realizamos la conexión
              $this->conect = new PDO($conectionString, $this->user, $this->password);
              $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      } catch(PDOException $e){
           $this->conect="Error fallida";
           echo "Error: ". $e->getMessage();
      }
  }//constructor

  //Creamos función para utilizarlo a la hora de hacer el login
  public function connect(){
      return $this->conect;
  }

}//finalClase

//Instanciamos
$user = new Conexion();







?>