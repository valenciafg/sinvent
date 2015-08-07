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

class Agreements_model extends CI_Model {

    public function ___construct() {

        parent::___construct();

        //$this->load->database();
    }
    public function get_all_agreements(){
        $this->db->select('*');
        $query = $this->db->get('agreements');
        return $query->result_array();
    }
    public function add_agreement($data){
        $this->db->insert('agreements', $data);
    }
    public function get_agreement_info($id){
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('agreements');
        return $query->result_array();
    }
    public function get_agreement_info_by_number($agreement_number){
        $this->db->select('*');
        $this->db->where('agreement_number', $agreement_number);
        $query = $this->db->get('agreements');
        return $query->result_array();
    }
    public function delete_agreement($id){
        $this->db->where('id', $id);
        $this->db->delete('agreements');
    }
    public function edit_agreement($data,$id){
        $this->db->where('id', $id);
        $this->db->update('agreements', $data); 
    }
}
?>