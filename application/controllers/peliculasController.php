<?php if ( ! defined('BASEPATH') ) exit('No direct script access allowed');

class PeliculasController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('peliculasModel');
	}

	public function index()
	{
		$this->load->view('inicio');	
	}

	public function guardar()
	{
		$ruta = base_url('peliculasController');
		if (isset($_POST)) {
			//log_message('error', $_POST);
			$this->peliculasModel->guardar($_POST);
		}
		$this->load->view('inicio');
		echo "<script>
				alert('Pelicula guardad satisfactoriamente');
				window.location  = '{$ruta}'
		</script>";
	}

}

/* End of file peliculasController.php */
/* Location: ./application/controllers/peliculasController.php */