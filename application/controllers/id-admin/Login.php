<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('id-admin/login_model');
	}
	public function index(){
		if(!$this->session->userdata('id_user')){
			$this->load->view('id-admin/login');
		}else{
			redirect('id-admin/product');
		}
	}
	public function cekLogin(){
		$data = array(
			'username' => $this->security->xss_clean($this->input->post('username')),
			'password' => $this->security->xss_clean(md5($this->input->post('password')))
		);

		$cek = $this->login_model->aksiLogin($data);
		if($cek != NULL){
			$usersession = array(
				'id_admin' => $cek->id_admin,
				'username' => $cek->username,
				'fullname' => $cek->fullname,
			);
			$this->session->set_userdata($usersession);			
			redirect('id-admin/module/product');
		}else{
			$this->session->set_flashdata('msg', 'failed-1');
			redirect('id-admin');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		$this->session->set_flashdata('msg', 'logout');
		redirect('id-admin');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/id-admin/Login.php */