<?php
	class Home extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function home()
		{
			$data['page_id'] = 1;
			$data['tag_page'] = "Home";
			$data['page_title'] = "Página principal";
			$data['page_name'] = "home";
			$data['page_content'] = "Lorem ipsum dolor sit amet, .";
			$this->views->getView($this,"home",$data);
		}
		public function insertar()
		{
			$data=$this->model->setUser("Laura", "por favor sirveeee");
			print_r($data);
		}
		public function verusuario($id)
		{
			$data = $this->model->getuser($id);
			print_r($data);
		}
	}
 ?>