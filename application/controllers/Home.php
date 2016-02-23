<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('id-admin/product_model');
    }
    public function index(){
        $data['listproduct'] = $this->product_model->getProductHome();
        $this->load->view('header');
        $this->load->view('home', $data);
        $this->load->view('footer');
    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */