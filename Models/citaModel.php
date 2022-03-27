<?php
    
    class citaModel  extends Mysql
    {
        public function __construct()
        {
            parent::__construct();            
        }

        public function setCita(string $nombre, string $tema, string $fecha_cita, string $hora_cita)        
        {    //"INSER INTO schedule (name, tema) VALUES (?,?)"
            $query_insert = 'INSERT INTO cita (nombre, tema, fecha_cita, hora_cita) VALUES (?,?,
            ?,?)';
            $arrData = array($nombre, $tema, $fecha_cita, $hora_cita );
            $request_insert = $this->insert($query_insert, $arrData);
            return $request_insert;
        }

        public function getCita($id)
        {
          $sql ="SELECT * FROM cita WHERE id =$id";
          $request =$this->select($sql);
          return $request;
        }

        public function updateCita(int $id, string $nombre, string $tema, string $fecha_cita, string $hora_cita )
        {
          $sql ="UPDATE cita SET nombre = ?, tema = ?, fecha_cita = ?, hora_cita = ?  WHERE id =$id";
          $arrData = array($nombre, $tema, $fecha_cita, $hora_cita);
          $request = $this->update($sql, $arrData);
          return $request;
        }


        public function getCitas()
        {
          $sql ="SELECT * FROM cita";
          $request =$this->select_all($sql);
          return $request;
        }




        public function deleteCita($id)
        {
          $sql ="DELETE FROM cita WHERE id =$id";
          $request =$this->delete($sql);
          return $request;
        }
    }

?>