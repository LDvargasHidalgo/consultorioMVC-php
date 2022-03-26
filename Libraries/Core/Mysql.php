<?php
class Mysql extends conexion
{
   private PDO $conexion;
   private $strquery;
   private $arrvalues;

   function  __construct()
   {
      $this->conexion = new conexion();
      $this->conexion = $this->conexion->conect();
      }

      // insert  to register
      public function insert(string  $query, array $arrValues)
      {
         $this->strquery =$query;
         $this->arrValues =$arrValues;
         $insert = $this->conexion->prepare($this->strquery);
         $resInsert = $insert->execute($this->arrValues);
         if($resInsert)
         {
            $lastInsert = $this->conexion->lastInsertId();            
         }else{
            $lastInsert =0;
         }
         return $lastInsert;
      }

      //return all records
      public  function select(string $query)
      {
         $this->strquery =$query;
         $result =$this->conexion->prepare($this->strquery);
         $result->execute();
         $data = $result->fetchall(PDO::FETCH_ASSOC);
         return $data;
      }
      //update records
      public function update(string $query, array $arrValues)
   {
      $this->strquery =$query;
      $this->arrValues = $arrValues;
      $update = $this->conexion->prepare($this->strquery);
      $resExecute = $update->execute($this->arrValues);
      return $resExecute;
   }
   //Delete
   public function delete(string $query )
   {
      $this->strquery =$query;
      $result = $this->conexion->prepare($this->strquery);
      $result->execute();
      return $result;
   }
}



?>