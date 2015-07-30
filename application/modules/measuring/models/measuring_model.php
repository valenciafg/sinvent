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

class Measuring_model extends CI_Model {

    public function ___construct() {

        parent::___construct();

        //$this->load->database();
    }

    public function get_measurings(){
    	$this->db->select('*');
        $query = $this->db->get('measuring');
        return $query->result_array();
    }
}
?>