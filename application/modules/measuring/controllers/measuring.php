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

class Measuring extends MX_Controller {

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
       // $this->lang->load($this->language, $this->language);
        $this->load->model('measuring/measuring_model');    
        // $this->lang->load('dashboard', 'english');
    }


    public function index() {
    $this->load->model('measuring/measuring_model');
        $this->load->model('location/location_model');
        $this->load->model('layers/layer_model');
        $data['page'] = 'inventory_locations';
                        $data['role'] = $this->role; 

        $data['language'] = $this->language;
        $data['buildings'] = $this->location_model->get_all_buildings();
        $data['first_floor'] = $this->inventory_model->get_initial_floor();
        $data['first_office'] = $this->inventory_model->get_initial_office();
        $data['locations'] = $this->inventory_model->get_all_inventory_location();
        $data['layers'] = $this->layer_model->get_all_other_layers();
        $data['first_sublayer'] = $this->inventory_model->get_initial_sublayer();
        $this->load->view('goods_location', $data);
    }

        public function get_measuring() {
            $main_cat = $this->input->post('main_cat');
            $id = $this->input->post('data');
            $this->load->model('measuring_model');
            $measurings = $this->measuring_model->get_measuring();
            $result = '<option value="">-select-</option>';
            foreach ($measurings as $measuring) {
                $result .= '<option value="' . $measuring['id'] . '" >' . $measuring["name"] . '</option>';
            }
            echo $result;
        }
}
?> 