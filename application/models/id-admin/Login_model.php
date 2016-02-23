<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }
    public function aksiLogin($data){
        $query = $this->db->get_where('db_admin', $data);
        return $query->row();
    }
}

/* End of file Login_model.php */
/* Location: ./application/models/id-admin/Login_model.php */