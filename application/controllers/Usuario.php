<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function index()
	{
		$data['menu']	=	"usuario";

		$this->load->view('includes/top',$data);
		$this->load->view('usuario/index');
		$this->load->view('includes/bottom');
	}


	public function info($IDConvoy = -1)
	{
		$data['menu']	=	"usuario";

		$this->load->view('includes/top',$data);
		$this->load->view('usuario/info');
		$this->load->view('includes/bottom');
	}


	public function personalizado($IDConvoy = -1)
	{
		$data['menu']	=	"usuario";

		$this->load->view('includes/top',$data);
		$this->load->view('usuario/personalizado');
		$this->load->view('includes/bottom');
	}

}

/* End of file usuario.php */
/* Location: ./application/controllers/usuario.php */ ?>