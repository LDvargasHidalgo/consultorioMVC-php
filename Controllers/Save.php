<?php
	class Save extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function save()
		{
			$data['page_id'] = 4;
            $data['tag_page'] = "Home";
			$data['page_title'] = "Página principal";
			$data['page_name'] = "home";
			$this->views->getView($this,"save",$data);
		}



		
    }