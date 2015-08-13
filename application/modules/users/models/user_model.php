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



class User_model extends CI_Model {



	public function ___construct()

	{

	parent::___construct();

		//$this->load->database();

	}



	function get_all_users() {

		$query = $this->db->query('select users.*, groups.name as group_name from users left join groups on users.group_id = groups.id');

         return $query->result_array();

	}
	
	function get_user_info($id) {

		$this->db->select('*');
                $this->db->where('id', $id);
		$query = $this->db->get('users');

         return $query->row_array();

	

	}
    function checkUser($data) {
    	$query = $this->db->select('u.*, g.name as group, g.role_id as rol_id, r.name as rol_name,g.application_id as app_id , a.name as app_name')
                ->from('users as u')
                ->join('groups as g', 'u.group_id = g.id', 'LEFT')
                ->join('roles as r', 'g.role_id = r.id', 'LEFT')
                ->join('applications as a', 'g.application_id = a.id', 'LEFT')                
                ->where('u.username', $data['username'])
                ->where('u.password', $data['password'])
                ->get();
        return $query->result_array();
	}

	function checkUsername($username){
		$query=$this->db->get_where('users',array('username'=>$username));
		return $query->result_array();
	}
	
	function check_role_application($user_role,$user_app,$role,$app){
		if($user_role == $role && $user_app == $app)
			return 1;
		else
			return 0;
	}

	function updateActiveSession($username,$active_session){
		$this->db->where('username',$username);
		$this->db->update('users',array('active_session' => $active_session,'active_session_time' => date('Y-m-d G:i:s')));
	}
	function updateSuspendedUser($username,$suspended){
		$this->db->where('username',$username);
		$this->db->update('users',array('suspended' => $suspended));
	}
	function updateSuspendedTime($username){
		$this->db->where('username',$username);
		$this->db->update('users',array('suspended_start_time' => date('Y-m-d G:i:s')));
	}
	function resetSuspendedUser($username){
		$this->db->where('username',$username);
		$this->db->update('users',array('suspended_start_time' => NULL, 'suspended' => 3));
	}
	function getActiveSession($username){
		$query=$this->db->get_where('users',array('username'=>$username));
		$user_details = $query->result_array();
		if($user_details){
			$user_details = $user_details[0];
			return $user_details['active_session'];
		}else
			return FALSE;
	}
	function getActiveSessionTime($username){
		$query=$this->db->get_where('users',array('username'=>$username));
		$user_details = $query->result_array();
		if($user_details){
			$user_details = $user_details[0];
			return $user_details['active_session_time'];
		}else
			return FALSE;
	}
	function setActiveSessionTime($username){
		$this->db->where('username',$username);
		$this->db->update('users',array('active_session_time' => NULL));	
	}
	function resetActiveSessionTime($username){
		$this->db->where('username',$username);
		$this->db->update('users',array('active_session_time' => NULL));	
	}
	function newActiveSessionTime($username){
		$this->db->where('username',$username);
		$this->db->update('users',array('active_session_time' => date('Y-m-d G:i:s')));	
	}
	//Get company list

	public function add_user($data)

	{
		$this->db->insert('users', $data);

	}

	
	public function delete_user($user_id)

	{

		$this->db->where('id', $user_id);
		$this->db->delete('users');

	}

	

	

	//Function to update the user info

	

	function update_user($data,$id)

	{

	 $this->db->query("UPDATE users set

						 username			= '".$data['username']."',

						 password			= '".$data['password']."',

					     language			= '".$data['language']."',

					     email		= '".$data['email']."',	 

					     group_id			= '".$data['group_id']."'

						 where id=".$id."");

	

	}
        
        function getRole($group_id)
        {
             $this->db->select('role_id');
                $this->db->where('id', $group_id);
		$query = $this->db->get('groups');

         $role_data = $query->result_array();
        $role_id = $role_data[0]['role_id'];
        $this->db->select('name');
                $this->db->where('id', $role_id);
		$query = $this->db->get('roles');
                return $query->result_array();

        }


}