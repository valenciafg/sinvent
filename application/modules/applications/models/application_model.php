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
class Application_model extends CI_Model {

	public function ___construct(){
		parent::___construct();
	}
        
	function get_all_applications(){	    
		$this->db->select('*');
		$query = $this->db->get('applications');
	 	return $query->result_array();
	}
         
}