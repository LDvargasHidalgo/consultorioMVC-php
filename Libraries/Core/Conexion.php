<?php
class Conexion
{
   //private $conect;

   // public function  __construct()
   // {
   //    $connectionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";
   //    try {
   //       $this->conect = new PDO($connectionString, DB_USER, DB_PASSWORD);
   //       $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //       //echo "conexión exitosa";
   //    } catch (PDOException $e) {
   //       $this->conect = 'Error de conexión';
   //       echo "ERROR: " . $e->getMessage();
   //    }
   // }

   // public function conect()
   // {  
   //    return $this->conect;
   // }

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
