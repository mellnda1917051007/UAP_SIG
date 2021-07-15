<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {
	function __construct()
	{
		parent::__construct();
                $this->load->model('m_model');
				is_logged_in();
	}
	
	public function index()
	{
		$atas =array(
			'menu' =>'beranda'
		);
		$this->load->view('templates/admin/header',$atas);

		$data =array(
			'judul' => 'Pemetaan Rumah Sakit Bandar Lampung',
			'RS' => $this->m_model->data_RS(),
			
		);
		$this->load->view('beranda',$data, FALSE);
		$this->load->view('templates/admin/footer');
	}

	public function biodata(){
			$atas =array(
			'menu' =>'biodata'
		);
		$this->load->view('templates/admin/header',$atas);
		$data =array(
			'judul' => 'Biodata Penulis',
			
			
		);
		$this->load->view('biodata', $data);
		$this->load->view('templates/admin/footer');
	}

	public function rumah_sakit(){
		$atas =array(
			'menu' =>'rumah_sakit'
		);
		$this->load->view('templates/admin/header',$atas);
		$data =array(
			'judul' => 'Data Rumah Sakit'
			
		);
		$this->load->view('rumah_sakit', $data);
		$this->load->view('templates/admin/footer');

	}
	public function tampilRS($offset=null){
		$search = array(
			'keyword' => trim($this->input->post('search_key')),
		);
		
		$this->load->library('pagination');
		
		$limit = 5;
		$offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$config['base_url'] = base_url('administrator/tampilRS');
		$config['total_rows'] = $this->m_model->get_tampil_RS($limit, $offset, $search, $count=true, 'rumah_sakit', 'kecamatanRS','idRS');
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		$config['num_links'] = 3;
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li><a href="" class="current_page">';
		$config['cur_tag_close'] = '</a></li>';
		$config['next_link'] = '<span uk-pagination-next></span>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '<span uk-pagination-previous></span>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);

		$data['rumah_sakit'] = $this->m_model->get_tampil_RS($limit, $offset, $search, $count=false, 'rumah_sakit', 'kecamatanRS','idRS');
		$data['pagelinks'] = $this->pagination->create_links();
		$this->load->view('ajax/rs_ajax',$data);   
	}
	

	public function saveDataRS(){
		$kecamatanRS=$this->input->post('kecamatanRS',TRUE);
		$lokasiRS=$this->input->post('lokasiRS',TRUE);
		$keteranganRS =$this->input->post('keteranganRS');
		$lat=$this->input->post('latitudeRS',TRUE);
		$long=$this->input->post('longitudeRS',TRUE);
		$kategori=$this->input->post('kategori',TRUE);

		$latitude= trim($lat);
		$longitude= trim($long);
		

			$data = array(
			'kecamatanRS' => $kecamatanRS,
			'lokasiRS' => $lokasiRS,
			'latitudeRS' => $latitude,
			'longitudeRS' => $longitude,
			'keteranganRS' => $keteranganRS,
			'kategoriRS' =>$kategori,
			
		  ); 
		$this->m_model->simpan('rumah_sakit', $data);

	

	}
	
	public function editDataRS(){
		$id=$this->input->post('idRS',TRUE);
		$kecamatanRS=$this->input->post('kecamatanRS',TRUE);
		$lokasiRS=$this->input->post('lokasiRS',TRUE);
		$keteranganRS =$this->input->post('keteranganRS');
		$lat=$this->input->post('latitudeRS',TRUE);
		$long=$this->input->post('longitudeRS',TRUE);
		$kategori=$this->input->post('kategori',TRUE);

		$latitude= trim($lat);
		$longitude= trim($long);
		

			$data = array(
			'kecamatanRS' => $kecamatanRS,
			'lokasiRS' => $lokasiRS,
			'latitudeRS' => $latitude,
			'longitudeRS' => $longitude,
			'keteranganRS' => $keteranganRS,
			'kategoriRS' =>$kategori,
			
		  ); 
		$this->m_model->editdata('rumah_sakit','idRS', $id, $data);
			
	}
	

	public function hapusRS(){
		$id= $this->input->post('id');
		
		$this->m_model->hapus('rumah_sakit',$id,'idRS');
	}
		//RS

		// User
		public function users(){
			$atas =array(
				'menu' =>'users'
			);
			$this->load->view('templates/admin/header',$atas);
			$data =array(
				'judul' => 'Data Users',
				
				
			);
			$this->load->view('users', $data);
			$this->load->view('templates/admin/footer');
	
		}

		public function tampilUsers($offset=null){
			$search = array(
				'keyword' => trim($this->input->post('search_key')),
			);
			
			$this->load->library('pagination');
			
			$limit = 5;
			$offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$config['base_url'] = base_url('administrator/tampilUsers');
			$config['total_rows'] = $this->m_model->get_tampil($limit, $offset, $search, $count=true, 'users', 'namaLengkap','idUsers');
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['num_userss'] = 3;
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li><a href="" class="current_page">';
			$config['cur_tag_close'] = '</a></li>';
			$config['next_users'] = '<span uk-pagination-next></span>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['prev_users'] = '<span uk-pagination-previous></span>';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['first_users'] = 'First';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_users'] = 'Last';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			
			$this->pagination->initialize($config);
	
			$data['users'] = $this->m_model->get_tampil($limit, $offset, $search, $count=false, 'users', 'namaLengkap','idUsers');
			$data['pagelinks'] = $this->pagination->create_links();
			$this->load->view('ajax/users_ajax',$data);   
		}
	
		public function saveDataUsers(){
			$pass=$this->input->post('password',TRUE);
			$data = array('namaLengkap' => $this->input->post('nama',TRUE),
						  'username' =>$this->input->post('username',TRUE),
						  'password' =>password_hash($pass, PASSWORD_DEFAULT),
						  'status' =>$this->input->post('status',TRUE),
						  'md4' =>md5($pass),
						); 
			$this->m_model->simpan('users', $data);		
		}
		public function editDataUsersPass(){
			$id=$this->input->post('id',TRUE);
			$pass=$this->input->post('password',TRUE);
			
				$data = array('namaLengkap' => $this->input->post('nama',TRUE),
						  'username' =>$this->input->post('username',TRUE),
						  'password' =>password_hash($pass, PASSWORD_DEFAULT),
						  'status' =>$this->input->post('status',TRUE),
						  'md4' =>md5($pass),
						); 
			
			
			$this->m_model->editdata('users','idUsers', $id, $data);		
		}
		public function editDataUsers(){
			$id=$this->input->post('id',TRUE);
			
				$data = array('namaLengkap' => $this->input->post('nama',TRUE),
						  'username' =>$this->input->post('username',TRUE),
						  'status' =>$this->input->post('status',TRUE),
						); 
			
			
			$this->m_model->editdata('users','idUsers', $id, $data);		
		}
		public function hapusUsers(){
			$id= $this->input->post('id');
			$this->m_model->hapus('users',$id,'idUsers');
		}
			//
		// User
}
