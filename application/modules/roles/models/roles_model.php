<?php 
/*****************************************************
<copyright>
Linux Solutions, C.A.
Alfonso Santana
Caracas - Venezuela
Todos los derechos reservados 2015
</copyright>
***************************/
if (!defined('BASEPATH')) exit('No direct script access allowed');



class Roles_model extends CI_Model {



	public function ___construct()

	{

	parent::___construct();

		//$this->load->database();

	}


        function add_role($data)
        {
            $this->db->insert('roles', $data);
        }
	function get_all_roles() {

		$this->db->select('*');

		$query = $this->db->get('roles');

         return $query->result_array();

	}
       
        
function get_role_info($id) {

		$this->db->select('*');
                $this->db->where('id', $id);
		$query = $this->db->get('roles');

         return $query->result_array();

	

	}
        function update_role($data,$id)
	{

	 $this->db->query("UPDATE roles set

						 name			= '".$data['name']."',
						 description            = '".$data['description']."'
						 where id=".$id."");

	

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
        public function add_floor($data)

	{
		$this->db->insert('floors', $data);

	}
        
         public function add_office($data)

	{
		$this->db->insert('office', $data);

	}
        


	
	public function delete_user($user_id)

	{

		$this->db->where('user_id', $user_id);

		$this->db->delete('procure_comp_user');

	}

	

	

	//Function to update the user info


}