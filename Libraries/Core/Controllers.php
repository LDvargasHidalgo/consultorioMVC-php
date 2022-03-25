<?php

    class Controllers
    {
        public function __construct()
        {
            $this->views = new Views();
            $this-> loadModel();
            
        }

        public function loadModel ()
        {
            $model = get_class($this) . "Model";
            $routesClass = "Models/". $model . ".php";
            if(file_exists($routesClass)){
                require_once($routesClass);
                $this->model = new $model();
            }

        }
    }


?>