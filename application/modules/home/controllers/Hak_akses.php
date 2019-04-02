<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hak_akses extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_hak_akses');
	}

	public function index(){
		
		if($this->session->userdata('username') != ''){
			$data['judul'] = "Admin Siakad Poligon";
			$data['list_level'] = $this->m_hak_akses->getData('t_level');

			$this->load->view('home/templates/v_header', $data);
			$this->load->view('v_hak_akses', $data);
			$this->load->view('home/templates/v_footer');
		} else {
			redirect('login');
		}	
	}
}