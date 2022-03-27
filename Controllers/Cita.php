<?php
	class Cita extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		
		public function crearCita()
		{
			$data=$this->model->setCita("John", "Creacion de CRUD", "2022-03-26", "03:00:00" );
			print_r($data);
		}

		public function verCita($id)
		{
			$data = $this->model->getCita($id);
			print_r($data);
		}

		public function actualizarCita()
		{
			$data = $this->model->updatCita("Juan", "Creacion de CRUDo", "2022-03-26", "03:00:00");
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