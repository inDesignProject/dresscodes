<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }
    // front
    public function getProductHome(){
        $this->db->select('*');
        $this->db->from('db_product');
        $this->db->join('db_product_image', 'db_product_image.id_product = db_product.id_product');
        $this->db->group_by('db_product_image.id_product');
        $this->db->order_by('db_product.date_added', 'DESC');
        $this->db->limit(8);
        $query = $this->db->get();
        return $query->result();
    }
    public function getProductSlug($slug){
        $query = $this->db->get_where('db_product', array('slug'=>$slug));
        return $query->row();
    }
    public function getImageSlug($id_product){
        $query = $this->db->get_where('db_product_image', array('id_product'=>$id_product));
        return $query->result();
    }
    // index
    public function getProduct($id = FALSE){
        if($id === FALSE){
            $this->db->select('*');
            $this->db->from('db_product');
            $this->db->order_by('db_product.date_added', 'DESC');
            $query = $this->db->get();
            return $query->result();
        }
        $this->db->select('*');
        $this->db->from('db_product');
        $this->db->join('db_product_image', 'db_product_image.id_product = db_product.id_product');
        $this->db->where('db_product.id_product', $id);
        $query = $this->db->get();
        return $query->row();
    }
    // add
    public function setProduct($dataProduct){
        $this->db->insert('db_product', $dataProduct);
    }
    public function setProductImage($dataImage){
        $this->db->insert('db_product_image', $dataImage);
    }
    // edit
    public function editProduct($id, $dataProduct){
        $this->db->where('id_product', $id);
        return $this->db->update('db_product', $dataProduct);
    }
    public function editProductImage($id, $dataImage){
        $this->db->where('id_product', $id);
        return $this->db->update('db_product_image', $dataImage);
    }
    // delete
    public function getImageDelete($id){
        $query = $this->db->get_where('db_product_image', array('id_product' => $id));
        return $query->result();
    }
    public function getImage($id){
        $query = $this->db->get_where('db_product_image', array('id_product_image' => $id));
        return $query->row();
    }
    public function deleteProduct($id){
        return $this->db->delete('db_product', array('id_product'=>$id));
    }
    public function deleteProductImage($id){
        return $this->db->delete('db_product_image', array('id_product'=>$id));
    }
    public function deleteImage($id){
        return $this->db->delete('db_product_image', array('id_product_image'=>$id));
    }
}

/* End of file product_model.php */
/* Location: ./application/models/id-admin/product_model.php */