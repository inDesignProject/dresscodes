<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('id-admin/product_model');
    }
    public function index(){
        $data['menu'] = 'product';
        $data['listproduct'] = $this->product_model->getProduct();
        $this->load->view('id-admin/header');
        $this->load->view('id-admin/menu',$data);
        $this->load->view('id-admin/module/product/index', $data);
        $this->load->view('id-admin/footer');
    }
    public function add(){
        $data['menu'] = 'product';
        $this->form_validation->set_rules('description','description','required');
        if($this->form_validation->run() === FALSE){
            $this->load->view('id-admin/header');
            $this->load->view('id-admin/menu',$data);
            $this->load->view('id-admin/module/product/add');
            $this->load->view('id-admin/footer');
        }else{
            $slug= url_title($this->input->post('title_1'), 'dash', TRUE);
            // insert product
            $dataProduct = array(
                'title_1' => $this->security->xss_clean($this->input->post('title_1')),
                'title_2' => $this->security->xss_clean($this->input->post('title_2')),
                'slug' => $this->security->xss_clean($slug),
                'brand' => $this->security->xss_clean($this->input->post('brand')),
                'description' => $this->security->xss_clean($this->input->post('description')),
                'price_1' => $this->security->xss_clean($this->input->post('price_1')),
                'price_2' => $this->security->xss_clean($this->input->post('price_2')),
                'date_added' => date('Y-m-d H:i:s'),
                'date_edited' => date('Y-m-d H:i:s')
            );
            $this->product_model->setProduct($dataProduct);

            // insert product image
            $last_id_product = $this->db->insert_id();
            $namafile = $slug;
            $config['upload_path']          = './dist/frontend/product/';
            $config['allowed_types']        = 'jpg|png|jpeg|pneg';
            $config['max_width']            = 1024;
            $config['max_height']           = 768;          
            $config['file_name']            = $namafile;

            $files = $_FILES;
            $cpt = count ( $_FILES ['userfile'] ['tmp_name'] );

            $this->upload->initialize($config);
            for($i = 0; $i < $cpt; $i ++) {
                $_FILES['userfile']['name']        = $files['userfile']['name'][$i];
                $_FILES['userfile']['type']        = $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name']    = $files['userfile']['tmp_name'][$i];
                $_FILES['userfile']['error']       = $files['userfile']['error'][$i];
                $_FILES['userfile']['size']        = $files['userfile']['size'][$i];
                if (!$this->upload->do_upload('userfile')){
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('error',$error['error']);
                    redirect('id-admin/module/product/add');
                }else{
                    $data = array('upload_data' => $this->upload->data());
                    $dataImage = array(
                        'id_product' => $last_id_product,
                        'image' => $this->upload->data('file_name')
                    );
                    $this->product_model->setProductImage($dataImage);
                }
            }
            redirect('id-admin/module/product');
        }
    }
    public function edit($id){
        $data['menu'] = 'product';
        $data['product'] = $this->product_model->getProduct($id);
        $data['productimage'] = $this->product_model->getImageDelete($id);
        $this->form_validation->set_rules('description','description','required');
        if($this->form_validation->run() === FALSE){
            $this->load->view('id-admin/header');
            $this->load->view('id-admin/menu',$data);
            $this->load->view('id-admin/module/product/edit', $data);
            $this->load->view('id-admin/footer');
        }else{
            $slug= url_title($this->input->post('title_1'), 'dash', TRUE);
            // edit product
            $dataProduct = array(
                'title_1' => $this->security->xss_clean($this->input->post('title_1')),
                'title_2' => $this->security->xss_clean($this->input->post('title_2')),
                'slug' => $this->security->xss_clean($slug),
                'brand' => $this->security->xss_clean($this->input->post('brand')),
                'description' => $this->security->xss_clean($this->input->post('description')),
                'price_1' => $this->security->xss_clean($this->input->post('price_1')),
                'price_2' => $this->security->xss_clean($this->input->post('price_2')),
                'soldout' => $this->security->xss_clean($this->input->post('soldout')),
                'date_edited' => date('Y-m-d H:i:s')
            );
            $this->product_model->editProduct($id, $dataProduct);

            // insert new product image
            $namafile = $slug;
            $config['upload_path']          = './dist/frontend/product/';
            $config['allowed_types']        = 'jpg|png|jpeg|pneg';
            $config['max_width']            = 1024;
            $config['max_height']           = 768;          
            $config['file_name']            = $namafile;

            $files = $_FILES;
            $cpt = count ( $_FILES ['userfile'] ['tmp_name'] );

            $this->upload->initialize($config);
            for($i = 0; $i < $cpt; $i ++) {
                $_FILES['userfile']['name']        = $files['userfile']['name'][$i];
                $_FILES['userfile']['type']        = $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name']    = $files['userfile']['tmp_name'][$i];
                $_FILES['userfile']['error']       = $files['userfile']['error'][$i];
                $_FILES['userfile']['size']        = $files['userfile']['size'][$i];
                if ($this->upload->do_upload('userfile')){
                    $data = array('upload_data' => $this->upload->data());
                    $dataImage = array(
                        'id_product' => $id,
                        'image' => $this->upload->data('file_name')
                    );
                    $this->product_model->setProductImage($dataImage);
                }
            }
            redirect('id-admin/module/product');
        }
    }
    public function delete($id){
        $listproduct = $this->product_model->getImageDelete($id);
        foreach ($listproduct as $product) {
            unlink('./dist/frontend/product/'.$product->image);
        }
        $this->product_model->deleteProductImage($id);
        $this->product_model->deleteProduct($id);
        redirect('id-admin/module/product');
    }
    public function deleteimg($id_product, $id){
        $image = $this->product_model->getImage($id);
        unlink('./dist/frontend/product/'.$image->image);
        $this->product_model->deleteImage($id);
        redirect('id-admin/module/product/edit/'.$id_product);
    }
}

/* End of file Product.php */
/* Location: ./application/controllers/id-admin/Product.php */