<?php 
/*****************************************************
<copyright>
Linux Solutions, C.A.
Alfonso Santana
Caracas - Venezuela
Todos los derechos reservados 2015
</copyright>
***************************/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location extends MX_Controller {
        
    
        public function __construct() {

        parent::__construct();
//        if($this->session->all_userdata('language') != '')
//        {
//            $this->language = $this->session->userdata('language');
//        }
//        else
//        {
//            $this->language = $this->config->item('default_language');
//        }
                $this->language = 'spanish';
                $this->role = $this->session->userdata('role');


//$this->language = ($this->session->all_userdata('language')) ? $this->session->userdata('language') : $this->config->item('default_language'); 
         if (! $this->session->userdata('username'))
        {
            redirect('site/home/login','refresh');; // the user is not logged in, redirect them!
        }
        $this->lang->load($this->language,  $this->language);
        $this->load->model('location/location_model');         
//         $this->lang->load('leftmenu', 'english');
//        $this->lang->load('dashboard', 'english');
    }
	public function index()
	{
                $data['page'] = 'location';
                                $data['role'] = $this->role; 

                $data['language'] = $this->language;
                $data['buildings'] = $this->location_model->get_all_buildings();
                $data['floors'] = $this->location_model->get_all_floors();
                $data['first_floors'] = $this->location_model->get_first_floors();
                $data['buildings_floors'] = $this->location_model->get_floors_buildings();
                $data['office_floors_buildings'] = $this->location_model->get_office_floors_buildings();
               $this->load->view('location_view', $data);
	}
        public function add_building()
	{
          $data['name'] = $this->input->post('name'); 
          $data['address'] = $this->input->post('address'); 
          //$data['latitude'] = $this->input->post('latitude'); 
          //$data['langitude'] = $this->input->post('langitude'); 
          $this->location_model->add_building($data);
          redirect('location');
	}
        public function add_floor()
	{
          $data['building_id'] = $this->input->post('building_id'); 
          $data['name'] = $this->input->post('floor'); 
          $this->location_model->add_floor($data);
          redirect('location');
	}
        public function add_office()
	{
          $data['building_id'] = (int)$this->input->post('building_id'); 
          $data['floor_id'] = (int)$this->input->post('floor_id'); 
          $data['name'] = $this->input->post('office'); 
          $this->location_model->add_office($data);
          redirect('location');
	}
        public function edit_building()
        {
            
            if($this->input->post('submit') != false)
            {
               $id = $this->input->post('building_id');
               $data['name'] = $this->input->post('name');
               $data['address'] = $this->input->post('address');
               $data['latitude'] = $this->input->post('latitude');
               $data['langitude'] = $this->input->post('langitude');
              $this->location_model->udpate_building($data, $id);
              redirect('location');
            }
            else
            {
            $id = $this->uri->segment(4, 0);
            $building_info = $this->location_model->get_building_info($id);
            $data['page'] = 'location';
            $data['building_info'] = $building_info[0];
            $this->load->view('location/edit_building', $data);
            }
        }
        public function delete_building_item()
        {
            $building_item_id = $this->input->post('building_item_id');
        $this->location_model->delete_building_item($building_item_id);
        }
         public function delete_floor()
        {
            $floor_id = $this->input->post('floor_id');
        $this->location_model->delete_floor($floor_id);
        }
        public function delete_office()
        {
            $office_id = $this->input->post('office_id');
        $this->location_model->delete_office($office_id);
        }
        
        
        public function get_content() {
        $main_cat = $this->input->post('main_cat');
        $id = $this->input->post('data');
        $this->load->model('location/location_model');
        if ($main_cat == 'buildings') {
            $floors = $this->location_model->get_building_floors($id);
            $result = $result = '<option value="">-select-</option>';
            foreach ($floors as $floor) {
                $result .= '<option value="' . $floor['id'] . '" >' . $floor["name"] . '</option>';
            }
            echo $result;
        } else {
            $offices = $this->location_model->get_floor_office($id);
            $result = '<option value="">-select-</option>';
            foreach ($offices as $office) {
                $result .= '<option value="' . $office['id'] . '" >' . $office["name"] . '</option>';
            }
            echo $result;
        }

//                 
//               $this->load->view('inventory_view', $data);
    }
     public function get_office_info() {
        $office_id = $this->input->post('office_id');
        $data['office'] = $this->location_model->get_office_info($office_id);
        $data['office'] = $data['office'][0];
        $data['buildings'] = $this->location_model->get_all_buildings();
        $data['floors'] = $this->location_model->get_building_floors($data['office']['building_id']);
        //$data['floors'] = $data['floors'][0];
//        print_r($data['office']);
//        exit;
        //$data['first_floors'] = $this->location_model->get_first_floors();
        $this->load->view('location/office_edit', $data);
    }
      public function edit_office() {
          
           $data['building_id'] = (int)$this->input->post('building_id'); 
          $data['floor_id'] = (int)$this->input->post('floor_id'); 
          $data['name'] = $this->input->post('office'); 
          $office_id = $this->input->post('office_id'); 
          $this->location_model->update_office($office_id, $data);
          redirect('location');
    }
    public function get_floor_info() {
        $floor_id = $this->input->post('floor_id');
//        echo $floor_id;
//        exit;
        $data['floor'] = $this->location_model->get_floor_info($floor_id);
//        print_r($data['floor']);
//        exit;
        $data['floor'] = $data['floor'][0];
        $data['buildings'] = $this->location_model->get_all_buildings();
        //$data['floors'] = $this->location_model->get_building_floors($data['office']['building_id']);
        //$data['floors'] = $data['floors'][0];
//        print_r($data['office']);
//        exit;
        //$data['first_floors'] = $this->location_model->get_first_floors();
        $this->load->view('location/floor_edit', $data);
    }
      public function edit_floor() {
          
           $data['building_id'] = (int)$this->input->post('building_id'); 
          $data['name'] = $this->input->post('floor'); 
          $floor_id = $this->input->post('floor_id'); 
          $this->location_model->update_floor($floor_id, $data);
          redirect('location');
    }

}

/* End of file users.php */
/* Location: ./application/modules/users/controllers/users.php */