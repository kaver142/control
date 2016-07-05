<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['menu']	=	"dashboard";

		$this->load->view('includes/top',$data);
		$this->load->view('dashboard');
		$this->load->view('includes/bottom');
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */ ?>