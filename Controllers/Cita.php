<?php
	class Cita extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		
		public function crearCita()
		{
			$data=$this->model->setCita("Jose", "Logica de programaión", "2022-03-26", "21:26:00" );
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