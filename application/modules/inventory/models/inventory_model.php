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

class Inventory_model extends CI_Model {

    public function ___construct() {

        parent::___construct();

        //$this->load->database();
    }

    function add_inventory($data) {
        $this->db->insert('inventory', $data);
    }

    function add_log($data) {
        $this->db->insert('inventory_logs', $data);
    }

    function get_all_inventory() {

        $this->db->select('*');

        $query = $this->db->get('inventory');

        return $query->result_array();
    }

    //nelson
    function get_all_inventory_location() {

        $location = 'location';
        $this->db->select('*');
        $this->db->where('sub_type', $location);

        $query = $this->db->get('inventory');
        $str = $this->db->last_query();



        return $query->result_array();
    }

    function get_all_inventory_article() {
        $article = 'article';
        $query = $this->db->select('t1.*, t2.name as building, t3.name as floor, t4.name as office, t5.name as category, t6.name as subcategory, t7.description as quantity_type')
                ->from('inventory as t1')
                ->join('buildings as t2', 't1.building_id = t2.id', 'LEFT')
                ->join('floors as t3', 't1.floor_id = t3.id', 'LEFT')
                ->join('office as t4', 't1.office_id = t4.id', 'LEFT')
                ->join('categories as t5', 't1.category = t5.id', 'RIGHT')
                ->join('subcategories as t6', 't1.subcategory = t6.id', 'RIGHT')
                ->join('measuring as t7', 't1.quantity_id = t7.id', 'RIGHT')
                ->where('t1.sub_type', $article)
                ->order_by('t1.date_added','DESC')
                ->get();
        return $query->result_array();

    }
    function get_article_work($id,$type){
        $array = array('t1.id'=>$id,'t1.type'=>$type);
        $this->db->select('t1.*, t2.description as unidad');
        $this->db->from('inventory as t1');
        $this->db->join('measuring as t2', 't1.quantity_id = t2.id', 'LEFT');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result_array();
    }
    function get_all_inventory_work() {
        $work = 'works';
        $query = $this->db->select('t1.*, t2.name as building, t3.name as floor, t4.name as office, t5.contractor as contractor')
                ->from('inventory as t1')
                ->join('buildings as t2', 't1.building_id = t2.id', 'LEFT')
                ->join('floors as t3', 't1.floor_id = t3.id', 'LEFT')
                ->join('office as t4', 't1.office_id = t4.id', 'LEFT')
                ->join('agreements as t5', 't1.agreement_id = t5.agreement_number', 'LEFT')
                ->where('t1.type', $work)
                ->get();
        return $query->result_array();
    }

    function get_all_inventory_location_edit($id) {


        $this->db->select('*');
        $this->db->where('id', $id);

        $query = $this->db->get('inventory');
        $str = $this->db->last_query();



        return $query->result_array();
    }

    function get_all_inventory_articles_edit($id) {


        $this->db->select('*');
        $this->db->where('id', $id);

        $query = $this->db->get('inventory');
        $str = $this->db->last_query();



        return $query->result_array();
    }

    function get_all_inventory_work_edit($id) {


        $this->db->select('*');
        $this->db->where('id', $id);

        $query = $this->db->get('inventory');
        $str = $this->db->last_query();



        return $query->result_array();
    }

    function getUser($id) {

        $this->db->select('user_id,user_fname,user_lname,user_email,user_joindate,user_status');

        $query = $this->db->get('procure_comp_user');

        return $query->result_array();
    }

    function checkUser($data) {
        //print_r($data);
        $query = $this->db->get_where('users', array('username' => $data['username'], 'password' => $data['password']));
        return $query->result_array();
    }

    //Get company list

    public function add_building($data) {
        $this->db->insert('buildings', $data);
    }

    public function delete_inventory($inventory_id) {
        $this->db->where('id', $inventory_id);
        if ($this->db->delete('inventory')) {
            $query = $this->db->get_where('inventory_logs', array('inventory_id' => $inventory_id));
            $inventory_logs = $query->result_array();
            foreach ($inventory_logs as $log) {
                $image_path = FCPATH . 'assets/img/inventory_uploads/' . $log['image'];
                unlink($image_path);
            }
            $this->db->where('inventory_id', $inventory_id);
            $this->db->delete('inventory_logs');
            //print_r($inventory_logs);
            //exit;
//                }    
        }
    }

    public function delete_work($work_id) {
        $this->db->where('id', $work_id);
        $this->db->delete('inventory');
    }

    public function delete_log($log_id) {

        $query = $this->db->get_where('inventory_logs', array('id' => $log_id));
        $logs = $query->result_array();

        foreach ($logs as $log) {
            $image_path = FCPATH . 'assets/img/inventory_uploads/' . $log['image'];
            unlink($image_path);
        }
        $this->db->where('id', $log_id);
        $this->db->delete('inventory_logs');
    }

    //get layer item
    function get_layer_items($layer_id) {
        $query = $this->db->get_where('layers_items', array('layer_id' => $layer_id));
        return $query->result_array();
    }

    function get_initial_sublayer() {
        $f = mysql_query("SELECT id FROM layers ORDER BY id ASC LIMIT 2");
        while ($gf = mysql_fetch_array($f)) {
            $secondid = $gf['id'];
        }
        $query = $this->db->get_where('layers_items', array('layer_id' => $secondid));
        return $query->result_array();
    }

    function get_initial_office() {

        //getting first building
        $this->db->select_min('id');
        $query = $this->db->get('buildings');
        $result_array = $query->result_array();
        $firstbuildingid = $result_array[0]['id'];

//getting first floor
        $this->db->select_min('id');
        $query = $this->db->get('floors');
        $result_array = $query->result_array();
        $firstfloorid = $result_array[0]['id'];

        $query = $this->db->get_where('office', array('building_id' => $firstbuildingid, 'floor_id' => $firstfloorid));
        return $query->result_array();
    }

    function get_initial_floor() {
//        $fb = mysql_query("SELECT id FROM buildings ORDER BY id ASC LIMIT 1");
//        while ($gf = mysql_fetch_array($fb)) {
//            $firstbuildingid = $gf['id'];
//        }
        $this->db->select_min('id');
        $query = $this->db->get('buildings');
        $result_array = $query->result_array();
        $firstbuildingid = $result_array[0]['id'];
        $query = $this->db->get_where('floors', array('building_id' => $firstbuildingid));
        return $query->result_array();
    }

    function get_inventory_logs($inventory_id) {
        $query = $this->db->get_where('inventory_logs', array('inventory_id' => $inventory_id));
        return $query->result_array();
    }

    //Function to update the user info
    function location_edit($good_location_id, $data) {

        $this->db->query("UPDATE inventory set
              

						 type= '" . $data['type'] . "',

						 sub_type= '" . $data['sub_type'] . "',

					         layer_id= '" . $data['layer_id'] . "',

					         sub_layer_id= '" . $data['sub_layer_id'] . "',	 

					         brand= '" . $data['brand'] . "',

					          model= '" . $data['model'] . "',
					          serial= '" . $data['serial'] . "',
					           description= '" . $data['description'] . "'

						 where id=" . $good_location_id . "");
    }

    function article_edit($good_article_id, $data) {
        $this->db->where('id', $good_article_id);
        $this->db->update('inventory', $data);
    }

    function edit_work($work_id, $data) {
        $this->db->where('id', $work_id);
        $this->db->update('inventory', $data);
//        $this->db->query("UPDATE inventory set
//              
//
//						 type= '" . $data['type'] . "',
//
//						 sub_type= '" . $data['location'] . "',
//
//					         layer_id= '" . $data['layer_id'] . "',
//
//					         sub_layer_id= '" . $data['sub_layer_id'] . "',
//					          building_id= '" . $data['building_id'] . "',
//
//					         floor_id= '" . $data['floor_id'] . "',
//
//					         office_id= '" . $data['office_id'] . "', 
//	 
//
//					         brand= '" . $data['brand'] . "',
//
//					          jobname= '" . $data['jobname'] . "',
//					          engineername= '" . $data['engineername'] . "',
//					           `from`= '" . $data['from'] . "',
//					            `to`= '" . $data['to'] . "'
//
//						 where id=" . $work_id . "");
    }
    
    function get_building_floor($building_id) {
        $query = $this->db->get_where('floors', array('building_id' => $building_id));
        return $query->result_array();
    }
    function get_floor_office($floor_id) {
        $query = $this->db->get_where('office', array('floor_id' => $floor_id));
        return $query->result_array();
    }
    function get_good_info($id){
        $data = array(
            'id' => $id,
            'type' => 'goods'
            );
        $this->db->select('*');
        $query = $this->db->get_where('inventory',$data);        
        return $query->result_array();
    }
}
