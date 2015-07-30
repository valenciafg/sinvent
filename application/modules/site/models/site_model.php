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



class Site_model extends CI_Model {



	public function ___construct(){
		parent::___construct();
	}

	public function get_session_timeout(){
		$this->db->select('session_timeout');
		$this->db->where('id', 1);
		$query = $this->db->get('settings');
		return $query->result_array();
	}

	public function get_banned_timeout(){
		$this->db->select('banned_timeout');
		$query = $this->db->get('settings');
		return $query->result_array();
	}
}

?>