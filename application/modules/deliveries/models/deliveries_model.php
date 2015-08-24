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

class Deliveries_model extends CI_Model {

    public function ___construct() {

        parent::___construct();

        //$this->load->database();
    }
    public function get_all_processes(){
        $this->db->select('*');
        $query = $this->db->get('processes');
        return $query->result_array();
    }
    public function add_delivery($data,$ids,$cantidades,$fechas,$observaciones,$indexes){
        $this->db->trans_start();
        $this->db->insert('deliveries', $data);
        $last_id = $this->db->insert_id();
        //
        foreach ($indexes as $index) {
            $this->db->query("UPDATE inventory SET quantity_available = quantity_available - $cantidades[$index] WHERE id = $ids[$index]");
            $items_delivered = array(
                                "item_id" =>$ids[$index],
                                "delivery_id" =>$last_id ,
                                "given_amount" =>$cantidades[$index],
                                "observations" =>$observaciones[$index]
                                );
            $this->db->insert('items_delivered', $items_delivered);
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE){
        // generate an error... or use the log_message() function to log your error
            log_message('error', 'Error al insertar data');
        }
    }

    public function get_all_deliveries(){
        $query = $this->db->select('t1.*,t2.name as process')
        ->from('deliveries as t1')
        ->join('processes as t2', 't1.process_id = t2.id', 'LEFT')        
        ->get();
        return $query->result_array();
    }

    public function get_delivery_info($id){
        $query = $this->db->select('t1.*,t2.name as process')
        ->from('deliveries as t1')
        ->join('processes as t2', 't1.process_id = t2.id', 'LEFT')
        ->where('t1.id', $id)
        ->get();
        return $query->result_array();
    }
    public function get_delivery_details($id){
        $query = $this->db->select('t1.*,t2.description as good_equipment')
        ->from('items_delivered as t1')
        ->join('inventory as t2', 't1.item_id = t2.id', 'LEFT')  
        ->where('t1.delivery_id', $id)      
        ->get();
        return $query->result_array();
    }

}
?>