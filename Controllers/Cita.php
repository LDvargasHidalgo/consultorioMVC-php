<?php
	class Cita extends Controllers{

		// private  $id = $_POST['id'];
		// private  $nombre = $_POST['nombre'];
		// private  $tema = $_POST['tema'];
		// private  $fecha_cita = $_POST['fecha'];
		// private   $hora_cita = $_POST['hora'];


		public function __construct()
		{
			parent::__construct();
		}

		public function cita()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "citas";
			$data['page_title'] = "pide tu cita";
			$data['page_name'] = "citas";
			$this->views->getView($this,"cita",$data);
		}


		

		// print_r($_POST);
		
		
		
			
		
		

		public function crearCita()
		{	
			print_r($_POST);
			$id = $_POST['id'];
		    $nombre = $_POST['nombre'];
		    $tema = $_POST['tema'];
		    $fecha_cita = $_POST['fecha'];
		    $hora_cita = $_POST['hora'];

			$data=$this->model->setCita($id, $nombre, $tema, $fecha_cita, $hora_cita);
			print_r($data);
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
			print_r($data);
		}

		public function eliminarCita($id)
		{
			$data = $this->model->deleteCita($id);
			print_r($data);
		}

	}
 ?>