<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		// var_dump($this->mongo_db->get('usuarios'));
		// $datos = $this->mongo_db->get('GL_Usuarios');

		// foreach ($datos as $dato) {
		// 	echo $dato['nombre'];
		// }

		$this->load->view('login');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */ ?>