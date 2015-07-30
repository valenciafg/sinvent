<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class Inventory_model extends CI_Model {



	public function ___construct()

	{

	parent::___construct();

		//$this->load->database();

	}

        function add_inventory($data)
        {
            $this->db->insert('inventory', $data);
        }

	function get_all_inventory() {

		$this->db->select('*');

		$query = $this->db->get('inventory');

         return $query->result_array();

	}

function get_all_inventory_location() {

                $location='location';
		$this->db->select('*');
		$this->db->where('sub_type',$location );

		$query = $this->db->get('inventory');
               $str = $this->db->last_query();

          

         return $query->result_array();

	}
	function get_all_inventory_article() {
 		$article='article';
		$this->db->select('*');
		$this->db->where('sub_type', $article);

		$query = $this->db->get('inventory');

         return $query->result_array();

	}
	function get_all_inventory_work() {
	
                $work='works';
		$this->db->select('*');
		$this->db->where('type', $work);

		$query = $this->db->get('inventory');

         return $query->result_array();

	}
	
	function getUser($id) {

		$this->db->select('user_id,user_fname,user_lname,user_email,user_joindate,user_status');

		$query = $this->db->get('procure_comp_user');

         return $query->result_array();

	

	}
        function checkUser($data) {
                //print_r($data);
                $query = $this->db->get_where('users', array('username'=>$data['username'],'password'=>$data['password']));
         return $query->result_array();
	}


	

	//Get company list

	public function add_building($data)

	{
		$this->db->insert('buildings', $data);

	}

	
	public function delete_user($user_id)

	{

		$this->db->where('user_id', $user_id);

		$this->db->delete('procure_comp_user');

	}
        
        //get layer item
        function get_layer_items($layer_id)
        {
            $query = $this->db->get_where('layers_items', array('layer_id'=>$layer_id));
         return $query->result_array();
        }
        function get_initial_sublayer()
        {
             $query = $this->db->get_where('layers_items', array('layer_id'=>2));
         return $query->result_array();
        }
        function get_initial_office()
        {
            $query = $this->db->get_where('office', array('building_id'=>1, 'floor_id'=>1));
         return $query->result_array();
        }
         function get_initial_floor()
        {
            $query = $this->db->get_where('floors', array('building_id'=>1));
         return $query->result_array();
        }

	

	

	//Function to update the user info


}