<?php


    class Home {
        public function __construct()
        {
            
        }


        public function home ($params)
        {
            echo 'Mensaje desde el controllador';
        }

        public function datos ($params)
        {
            echo 'Dato recibido: '. $params;
        }
    }


?>