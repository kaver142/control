<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informes extends CI_Controller {

	public function index()
	{
		$data['menu']	=	"informes";

		$this->load->view('includes/top',$data);
		$this->load->view('informes/index');
		$this->load->view('includes/bottom');
	}

	public function mes()
	{
		$data['menu']	=	"informes";

		$this->load->view('includes/top',$data);
		$this->load->view('informes/mes');
		$this->load->view('includes/bottom');
	}

	public function lista()
	{
		$data['menu']	=	"informes";

		$this->load->view('includes/top',$data);
		$this->load->view('informes/lista');
		$this->load->view('includes/bottom');
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */ ?>