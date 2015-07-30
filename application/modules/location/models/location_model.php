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

class Location_model extends CI_Model {

    public function ___construct() {

        parent::___construct();

        //$this->load->database();
    }

    function get_all_buildings() {

        $this->db->select('*');

        $query = $this->db->get('buildings');

        return $query->result_array();
    }

    function get_all_floors() {

        $this->db->select('*');

        $query = $this->db->get('floors');

        return $query->result_array();
    }
    function get_all_offices() {
        $this->db->select('*');
        $query = $this->db->get('office');
        return $query->result_array();
    }
    function get_first_floors() {

//        $f = mysql_query("SELECT id FROM buildings ORDER BY id ASC LIMIT 1");
//        while ($gf = mysql_fetch_array($f)) {
//            $firstid = $gf['id'];
//        }
       $this->db->select_min('id');
$query = $this->db->get('buildings');
$result_array = $query->result_array();
$firstid = $result_array[0]['id'];
         //print_r($data);
        $query = $this->db->get_where('floors', array('building_id' => $firstid));
        return $query->result_array();
    }

    function get_floors_buildings() {

        $query = $this->db->query('SELECT buildings.name as building, buildings.address, floors.name as floor, floors.id as floor_id FROM floors left join buildings on floors.building_id = buildings.id');
        return $query->result_array();
    }

    function get_office_floors_buildings() {
        $query = $this->db->query("SELECT office.name as office, office.id as office_id, buildings.name as building, buildings.address, floors.name as floor  FROM office left join floors on floors.id = office.floor_id left join buildings on office.building_id  = buildings.id");
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

    public function add_floor($data) {
        $this->db->insert('floors', $data);
    }

    public function add_office($data) {
        $this->db->insert('office', $data);
    }

    public function delete_user($user_id) {

        $this->db->where('user_id', $user_id);

        $this->db->delete('procure_comp_user');
    }

    function get_building_floors($building_id) {
        $query = $this->db->get_where('floors', array('building_id' => $building_id));
        return $query->result_array();
    }

    function get_floor_office($floor_id) {
        $query = $this->db->get_where('office', array('floor_id' => $floor_id));
        return $query->result_array();
    }

    function get_building_info($building_id) {
        $query = $this->db->get_where('buildings', array('id' => $building_id));
        return $query->result_array();
    }

    function udpate_building($data, $id) {
        $this->db->update('buildings', $data, array('id' => $id));
    }

    //delete building item
    public function delete_building_item($building_item_id) {
        $this->db->where('id', $building_item_id);
        if ($this->db->delete('buildings')) {
            $this->db->where('building_id', $building_item_id);
            if ($this->db->delete('floors')) {
                $this->db->where('building_id', $building_item_id);
                $this->db->delete('office');
            }
        }
    }
    public function delete_floor($floor_id) {
        $this->db->where('id', $floor_id);
        if ($this->db->delete('floors')) {
            $this->db->where('floor_id', $floor_id);
            if ($this->db->delete('office'));
        }
    }
    public function delete_office($office_id) {
        $this->db->where('id', $office_id);
        $this->db->delete('office');
    }
    function get_office_info($office_id) {
        $query = $this->db->get_where('office', array('id' => $office_id));
        return $query->result_array();
    }
    function get_floor_info($floor_id) {
        $query = $this->db->get_where('floors', array('id' => $floor_id));
        return $query->result_array();
    }
    function update_office($office_id, $data)
    {
    $this->db->where('id', $office_id);
        $this->db->update('office', $data);
    }
    function update_floor($floor_id, $data)
    {
    $this->db->where('id', $floor_id);
        $this->db->update('floors', $data);
    }
    
    

    //delte building item end
    //Function to update the user info
}
