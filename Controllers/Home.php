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


		// public function citas()
		// {
		// 	$data['page_id'] = 2;
		// 	$data['page_tag'] = "citas";
		// 	$data['page_title'] = "pide tu cita";
		// 	$data['page_name'] = "citas";
		// 	$this->views->getView($this,"cita",$data);
		// }


		

		// print_r($_POST);
		
		
		
			
		
		

		public function crearCita($id, $nombre, $tema, $fecha_cita, $hora_cita)
		{	
			
			$data=$this->model->setCita($id, $nombre, $tema, $fecha_cita, $hora_cita);
			return $data;
			// print_r($data);
		}

		public function verCita($id)
		{
			$data = $this->model->getCita($id);
			print_r($data);
		}

		public function actualizarCita($id)
		{
			$data = $this->model->updateCita($id, "Juan", "Creacion de CRUD PHP", "2022-03-30", "21:18:00");
			print_r($data);
		}

		public function verCitas()
		{
			$data = $this->model->getCitas();
			return $data;
			print_r($data);
		}

		public function eliminarCita($id)
		{
			$data = $this->model->deleteCita($id);
			print_r($data);
		}

	}
		


 ?>