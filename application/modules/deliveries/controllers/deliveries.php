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

    public function add_agreement(){
        if ($this->input->post('submit', TRUE)) {
            $data = array(
                "number" => $this->input->post('agreement_number'),
                "contractor" => $this->input->post('agreement_contractor'),
                "amount_awarded" => (float)$this->input->post('amount_awarded'),
                "amount_per_run" => (float)$this->input->post('amount_per_run'),
                "physical_progress" => (float)$this->input->post('physical_progress'),
                "financial_progress" => (float)$this->input->post('financial_progress'),
                "name" => $this->input->post('agreement_name')
            );
            $this->agreements_model->add_agreement($data);
        }
        redirect("agreements");
    }
}

?>