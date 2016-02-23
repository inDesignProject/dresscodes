<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('id-admin/product_model');
    }
    public function index($slug){
        $data['product'] = $this->product_model->getProductSlug($slug);
        $id_product = $data['product']->id_product;
        $data['productimage'] = $this->product_model->getImageSlug($id_product);
        $this->load->view('header');
        $this->load->view('detail', $data);
        $this->load->view('footer');
    }
}

/* End of file Detail.php */
/* Location: ./application/controllers/Detail.php */