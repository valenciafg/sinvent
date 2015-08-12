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
class Groups_model extends CI_Model {



	public function ___construct()

	{

	parent::___construct();

		//$this->load->database();

	}


        function add_group($data)
        {
            $this->db->insert('groups', $data);
        }
	function get_all_groups() {
		$sql="SELECT 
				groups.*, 
				roles.name as role_name,
				applications.name as application_name
			from 
				groups 
			left join 
				roles 
			on 
				groups.role_id = roles.id
			left join
				applications
			on
				groups.application_id = applications.id";
		$query  = $this->db->query($sql);
		return $query->result_array();
	}
        
        function get_all_floors() {
            
		$this->db->select('*');

		$query = $this->db->get('floors');

         return $query->result_array();
        }
         function get_floors_buildings() {
            
		 $query  = $this->db->query('SELECT buildings.name as building, buildings.address, floors.name as floor FROM floors left join buildings on floors.building_id = buildings.id');
         return $query->result_array();
        }
          function get_office_floors_buildings() {
        $query  = $this->db->query("SELECT office.name as office, buildings.name as building, buildings.address, floors.name as floor  FROM office left join floors on floors.id = office.floor_id left join buildings on office.building_id  = buildings.id");
        return $query->result_array();  
          }
        
function get_group_info($id) {

		$this->db->select('*');
                $this->db->where('id', $id);
		$query = $this->db->get('groups');

         return $query->result_array();

	

	}
        function update_group($data,$id)
	{

	 $this->db->query("UPDATE groups set

						 name			= '".$data['name']."',
						 role_id			= '".$data['role_id']."'
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
        


	
		
	public function delete_group($group_id)

	{

		$this->db->where('id', $group_id);
		$this->db->delete('groups');

	}


	

	

	//Function to update the user info


}