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

class Deliveries extends MX_Controller {

    public function __construct() {
        parent::__construct();
    	$this->load->helper('sessions');
        without_stored_cache();
        session_inactivity_logout();
        $this->language = 'spanish';
        $this->role = $this->session->userdata('role');
        
        if (! $this->session->userdata('username') && $uristring != 'users/login'){
            redirect('site/home/login','refresh');; // the user is not logged in, redirect them!
        }
        $this->lang->load($this->language,  $this->language);
        $this->load->model('agreements/agreements_model');
        $this->load->model('deliveries_model');
    }

    public function index(){
        $data['page'] = 'deliveries';
        $data['role'] = $this->role;
        $data['language'] = $this->language;
        $data['agreements'] = $this->agreements_model->get_all_agreements();
        $data['processes'] = $this->deliveries_model->get_all_processes();
        $this->load->view('deliveries_view', $data);
    }

    public function add_delivery(){
        if ($this->input->post('submit', TRUE)) {
            if (!empty($this->input->post('id')) && is_array($this->input->post('id'))) { 
                //redirect('deliveriess');
                $items = array( $this->input->post('id'),
                                $this->input->post('cantidad'),
                                $this->input->post('fecha'),
                                $this->input->post('observaciones'));
                $delivered_by = $this->session->userdata('username');
                $data = array(
                "received_by" => $this->input->post('username'),
                "delivered_by" => $delivered_by,
                "process_id" => $this->input->post('process'));
            $this->deliveries_model->add_delivery($data,$items);
                //redirect('deliveriess?status=',$items);
            }
            //redirect('deliveriesx');
            /*$delivered_by = $this->session->userdata('username');
            $data = array(
                "received_by" => $this->input->post('username'),
                "delivered_by" => $delivered_by,
                "process_id" => $this->input->post('process')                               
            );
            $this->deliveries_model->add_delivery($data);*/
        }
        redirect('deliveries');
    }
}

?>