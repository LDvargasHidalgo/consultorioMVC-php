<?php
class Conexion
{


   public function __construct (){
      try{
         $this->mysql = $this->conect
         ();
         // echo 'Conexión extitosa';
      }catch(PDOException $exception){

         echo 'Error de conexción' . $exception->getMessage();

      }
   }

   function conect (){

         $connectionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";
         $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
         $pdo = new pdo ($connectionString,  DB_USER, DB_PASSWORD, $options);
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         return $pdo;

   }

   

}
