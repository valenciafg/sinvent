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

class Works_model extends CI_Model {

    public function ___construct() {

        parent::___construct();

        //$this->load->database();
    }
    public function get_all_works(){
        $query = $this->db->select('t1.*,t2.name as building, t3.name as floor, t4.name as office, t5.contractor as contractor')
        ->from('works as t1')
        ->join('buildings as t2', 't1.type = t2.id', 'LEFT')
        ->join('floors as t3', 't1.subtype = t3.id', 'LEFT')
        ->join('office as t4', 't1.clasification = t4.id', 'LEFT')
        ->join('agreements as t5', 't1.agreement_id = t5.agreement_number', 'LEFT')
        ->get();
        //$query = $this->db->get('works');
        return $query->result_array();
    }
    public function add_work($data){
        $this->db->insert('works', $data);
    }
    function get_all_inventory_work_edit($id) {
        $this->db->select("*");
        $this->db->where('id', $id);
        $query = $this->db->get('works');
        $str = $this->db->last_query();
        return $query->result_array();
    }

    public function edit_work($work_id,$data){
        $this->db->where('id', $work_id);
        $this->db->update('works', $data);
    }

    public function delete_work($work_id){
        $this->db->where('id', $work_id);
        $this->db->delete('works');
    }    

    public function add_file($data){
        $this->db->insert('work_uploads', $data);
    }
}
?>