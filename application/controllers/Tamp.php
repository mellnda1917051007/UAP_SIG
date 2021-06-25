<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamp extends CI_Controller 
{

	public function __construct()
	{
	parent::__construct();
	$this->load->model('Lok_Model');
	//$this->load->model('Cir_Model');
	$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('index');
		$this->load->view('templates/footer');
	}
	public function map2()
	{
		$rs_umum['rs_umum'] = $this->Lok_Model->getloc();
		$this->load->view('templates/header');
		$this->load->view('index');
		$this->load->view('templates/footer2' , $rs_umum);
	}

    public function form()
    {
	$this->form_validation->set_rules('nama', 'nama', 'required');
	$this->form_validation->set_rules('latitude', 'latitude', 'required');
	$this->form_validation->set_rules('longitude', 'longitude', 'required');

if($this->form_validation->run()==false){
	$this->load->view('templates/header');
	$this->load->view('form');
	$this->load->view('templates/footer');
}else{

	$this->Lok_Model->tambahDatalokasi();
	redirect('Tamp/form');
}

    }
}