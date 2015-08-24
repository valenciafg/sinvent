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
        $data['deliveries'] = $this->deliveries_model->get_all_deliveries();
        $this->load->view('deliveries_view', $data);
    }

    public function add_delivery(){                        
        $delivered_by = $this->session->userdata('username');        
        if ($this->input->post('submit', TRUE)) {
            if (!empty($this->input->post('id')) && is_array($this->input->post('id'))) { 
                $ids = $this->input->post("id");
                $cantidades = $this->input->post('cantidad');
                $observaciones = $this->input->post('observaciones');                
                $indexes = array_keys($ids);
                
                $data = array(
                        "received_by" => $this->input->post('username'),
                        "delivered_by" => $delivered_by,
                        "process_id" => $this->input->post('process'));
                $this->deliveries_model->add_delivery($data,$ids,$cantidades,$observaciones,$indexes);
            }
            
        }
        redirect('deliveries');
    }

    public function get_delivery_info(){
        $delivery_id = $this->input->post("delivery_id");
        $data['items'] = $this->deliveries_model->get_delivery_details($delivery_id);
        $this->load->view('deliveries_details',$data);
    }

    public function edit_delivery(){
        $delivery_id = $this->input->post("delivery_id");
        //$data['items'] = $this->deliveries_model->get_delivery_details($delivery_id);
        //$this->load->view('deliveries_details',$data);
        $this->load->view('edit_delivery');
    }

    public function delivery_pdf_report(){
        // Load all views as normal
        //$data['deliveries']=0;
        //$delivery_id = $this->input->post("delivery_id");
        $data['items'] = $this->deliveries_model->get_delivery_details(10);
        $data['delivery'] = $this->deliveries_model->get_delivery_info(10);
        $data['delivery'] = $data['delivery'][0];
        $this->load->view('delivery_pdf_report',$data);
        // Get output html
        $html = $this->output->get_output();
        
        // Load library
        $this->load->library('dompdf_gen');
        
        // Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("welcome.pdf",array('Attachment'=>0));
    }
}

?>