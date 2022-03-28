<?php
	class Tabla extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function tabla()
		{
			$data['page_id'] = 3;
            $data['tag_page'] = "Home";
			$data['page_title'] = "Página principal";
			$data['page_name'] = "home";
			$this->views->getView($this,"tabla",$data);
		}



		
    }

 ?>