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

class Agreements extends MX_Controller {

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
        $this->load->model('agreements_model');    
    }

    public function index(){
        $data['page'] = 'agreements';
        $data['role'] = $this->role;
        $data['language'] = $this->language;
        $data['agreements'] = $this->agreements_model->get_all_agreements();
        $this->load->view('agreements_view', $data);
    }

    public function add_agreement(){
        if ($this->input->post('submit', TRUE)) {
            $data = array(
                //"number" => $this->input->post('agreement_number'),
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
    public function get_agreement_info() {        
        $agreement_id = $this->input->post('agreement_id');
        $data['agreement'] = $this->agreements_model->get_agreement_info($agreement_id);
        $data['agreement'] = $data['agreement'][0];
        $this->load->view('agreements/agreements_edit',$data);
    }
    public function get_agreement_info_json() {        
        $agreement_number = $this->input->post('agreement_number');
        $data['agreement'] = $this->agreements_model->get_agreement_info_by_number($agreement_number);
        $data['agreement'] = $data['agreement'][0];
        //$this->load->view('agreements/agreements_edit',$data);
        echo json_encode($data['agreement']);
    }


    public function delete_agreement(){
        $agreement_id = $this->input->post('agreement_id');
        $this->agreements_model->delete_agreement($agreement_id);
    }

    public function edit_agreement(){
        $data = array(
            //'number' => $this->input->post('agreement_number'),
            'contractor' => $this->input->post('agreement_contractor'),
            'amount_awarded' => floatval($this->input->post('amount_awarded')),
            'amount_per_run' => floatval($this->input->post('amount_per_run')),
            'physical_progress' => floatval($this->input->post('physical_progress')),
            'financial_progress' => floatval($this->input->post('financial_progress')),
            'name' => $this->input->post('agreement_name')
        );
        
        $agreement_id = $this->input->post('agreement_id');
        $this->agreements_model->edit_agreement($data, $agreement_id);
        redirect("agreements");
    }
}

?>