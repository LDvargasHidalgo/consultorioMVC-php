<?php
    
    class homeModel  extends Mysql
    {
        public function __construct()
        {
            parent::__construct();            
        }
        public function setUser(string $name, string $tema)        
        {
            $query_insert ="INSER INTO schedule (name,tema) VALUES (?,?)";
            $arrData = array($name, $tema);
            $request_insert = $this->insert($query_insert, $arrData);
            return $request_insert;
        }
      public function getuser($id)
      {
        $sql ="SELECT * FROM schedule WHERE id =$id";
        $request =$this->select($sql);
        return $request;

      
      }
    }

    ?>