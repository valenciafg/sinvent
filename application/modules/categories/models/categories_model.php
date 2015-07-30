<?php
/*****************************************************
<copyright>
Linux Solutions, C.A.
Alfonso Santana
Caracas - Venezuela
Todos los derechos reservados 2015
</copyright>
***************************/
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Categories_model extends CI_Model {

    public function ___construct() {

        parent::___construct();

        //$this->load->database();
    }

    public function get_categories(){
    	$this->db->select('*');
        $query = $this->db->get('categories');
        return $query->result_array();
    }
    public function get_subcategories($id_categories){
        //$this->db->select('*');
        $this->db->select('subcategories.id as id,subcategories.name as name');
        $this->db->from('categories_subcategories');
        $this->db->join('subcategories','categories_subcategories.id_subcategories = subcategories.id');
        $this->db->where('categories_subcategories.id_categories', $id_categories); 
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_all_subcategories(){
        $this->db->select('*');
        $query = $this->db->get('subcategories');
        return $query->result_array();
    }
}
?>