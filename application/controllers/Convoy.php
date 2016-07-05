<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Convoy extends CI_Controller {

	public function index()
	{
		$data['menu']	=	"convoy_historial";

		$this->load->view('includes/top',$data);
		$this->load->view('convoy/index');
		$this->load->view('includes/bottom');
	}


	public function activos()
	{
		$data['menu']	=	"convoy_activos";

		$this->load->view('includes/top',$data);
		$this->load->view('convoy/activos');
		$this->load->view('includes/bottom');
	}


	public function info($IDConvoy = -1)
	{
		$data['menu']	=	"convoy_historial";

		$this->load->view('includes/top',$data);
		$this->load->view('convoy/info');
		$this->load->view('includes/bottom');
	}

	public function ubicacion($IDConvoy = -1)
	{
		$data['menu']	=	"convoy_historial";

		$this->load->view('includes/top',$data);
		$this->load->view('convoy/ubicacion');
		$this->load->view('includes/bottom');
	}


	// EVENTOS

	public function incidente($IDConvoy = -1)
	{
		$data['menu']	=	"convoy_historial";

		$this->load->view('includes/top',$data);
		$this->load->view('convoy/evento/incidente');
		$this->load->view('includes/bottom');
	}

	public function fatiga($IDConvoy = -1)
	{
		$data['menu']	=	"convoy_historial";

		$this->load->view('includes/top',$data);
		$this->load->view('convoy/evento/fatiga');
		$this->load->view('includes/bottom');
	}

	public function observacion($IDConvoy = -1)
	{
		$data['menu']	=	"convoy_historial";

		$this->load->view('includes/top',$data);
		$this->load->view('convoy/evento/observacion');
		$this->load->view('includes/bottom');
	}

	public function transgresion($IDConvoy = -1)
	{
		$data['menu']	=	"convoy_historial";

		$this->load->view('includes/top',$data);
		$this->load->view('convoy/evento/transgresion');
		$this->load->view('includes/bottom');
	}

}

/* End of file convoy.php */
/* Location: ./application/controllers/convoy.php */ ?>