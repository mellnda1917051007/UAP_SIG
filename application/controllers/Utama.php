<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Utama extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_model');
	}

	public function index()
	{
		$data = array(

			'rumah_sakit' => $this->m_model->data_RS(),

		);
		$this->load->view('utama', $data, FALSE);
	}
}
