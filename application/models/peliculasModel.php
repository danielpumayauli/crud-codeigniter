<?php if ( ! defined('BASEPATH') ) exit('No direct script access allowed');

class PeliculasModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function guardar($post)
     {
     	$datosPelicula = array();
     	$datosPelicula['titulo'] = $post['titulo'];
     	$datosPelicula['resumen'] = $post['resumen'];
     	$datosPelicula['ano'] = $post['ano'];
     	$datosPelicula['pais'] = $post['pais'];
     	$datosPelicula['protagonistas'] = $post['protagonistas'];

     	// if ($datosPelicula['idPelicula'] > 0){
     	// 	// update
     	// } else{
     		$this->db->insert('peliculas', $datosPelicula);
     	//}

     }

}

/* End of file peliculasModel.php */
/* Location: ./application/models/peliculasModel.php */