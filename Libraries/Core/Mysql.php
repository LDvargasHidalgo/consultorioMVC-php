<?php
class Mysql extends Conexion

	{
      private $conexion;
		private $strquery;
		private $arrayValues;

		public function __construct()

		{  
         
			$this->conexion = new conexion();
			$this->conexion =$this->conexion->conect();
		}

      // insert  to register into database
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

      // select data in database
		public function select(string $query)
		{
			$this->strquery = $query;
			$resutl = $this->conexion->prepare($this->strquery);
			$resutl->execute();
			$data = $resutl->fetch(PDO::FETCH_ASSOC);
			return $data;
		}

		// // select all data in database
		public function select_all(string $query)
		{
			$this->strquery = $query;
			$resutl = $this->conexion->prepare($this->strquery);
			$resutl->execute();
			$data = $resutl->fetchall(PDO::FETCH_ASSOC);
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
      $del = $result->execute();
      return $del;
   }
}



?>