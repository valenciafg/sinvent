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

class Works extends MX_Controller {

    public function __construct() {
        parent::__construct();
    	$this->load->helper('sessions');
        without_stored_cache();
        session_inactivity_logout();
        $this->language = 'spanish';
        $this->role = $this->session->userdata('role');
        if (! $this->session->userdata('username') && $uristring != 'users/login'){
            // the user is not logged in, redirect them!
            redirect('site/home/login','refresh');
        }
        $this->lang->load($this->language,  $this->language);
        $this->load->model('works/works_model');    
    }
    public function index() {
        $this->load->model('inventory/inventory_model');
        $this->load->model('location/location_model');
        $data['buildings'] = $this->location_model->get_all_buildings();
        $data['first_floor'] = $this->inventory_model->get_initial_floor();
        $data['first_office'] = $this->inventory_model->get_initial_office();
        
        $data['page'] = 'works';
        $data['role'] = $this->role; 
        $data['language'] = $this->language;
        $data['works'] = $this->works_model->get_all_works();
        $this->load->view('works_view',$data);
    }
    public function add_work(){
        $data = array(  'type' => (int)$this->input->post('work_type'),
                        'subtype' => (int)$this->input->post('work_subtype'),
                        'clasification' => (int)$this->input->post('work_clasification'),
                        'name' =>$this->input->post('work_name'),
                        'since' =>$this->input->post('since'),
                        'until' =>$this->input->post('until'),
                        'agreement_id' =>(int)$this->input->post('agreement_number'),
        );
        $this->works_model->add_work($data);
        redirect('works');
    }
    public function get_all_works(){
        $data=$this->works_model->get_all_works();
    }
    public  function get_work_info(){        
        $work_id = $this->input->post('work_id');
        
        $this->load->model('inventory/inventory_model');
        $this->load->model('location/location_model');
        $this->load->model('agreements/agreements_model');
        //$this->load->model('layers/layer_model');
        $data['page'] = 'inventory_works';
        $data['work']=$this->works_model->get_all_inventory_work_edit($work_id);
        $data['work'] = $data['work'][0]; 
        $data['buildings'] = $this->location_model->get_all_buildings();
        $data['floors'] = $this->location_model->get_all_floors();
        $data['offices'] = $this->location_model->get_all_offices();
        $data['agreement'] = $this->agreements_model->get_agreement_info($data['work']['agreement_id']);
        //$data['agreement'] = $data['agreement'][0];
        //$data['good_articles'] = $this->inventory_model->get_all_inventory_article();        
        $this->load->view('edit_work',$data);
    }

    public  function get_work_upload_info(){  
        $work_id = $this->input->post('work_id');
        $data['id']=$work_id;
        $this->load->view('work_upload',$data);
    }
    public function edit_work(){
        $work_id = $this->input->post('work_id');        
          $data = array(
            'name' => $this->input->post('jobname'),
            'agreement_id' => $this->input->post('edit_agreement_number'),
            'type' => (int)$this->input->post('works_building'),
            'subtype' => (int)$this->input->post('works_floor'),
            'clasification' => (int)$this->input->post('works_office'),            
            'since' => $this->input->post('since'),
            'until' => $this->input->post('until'),             
        );
        $this->works_model->edit_work($work_id,$data);
        redirect('works');
    }
    public function delete_work(){
        $work_id = $this->input->post('work_id');
        $this->works_model->delete_work($work_id);
    }

    public function do_upload(){
        /*$inventory_id = $this->input->post('inventory_id');
        $inventory_img_description = $this->input->post('inventory_img_description');
        //upload configuration
        //$config['max_size']   = '100';
        //$config['max_width']  = '1024';
        //$config['max_height']  = '768';
        $config['upload_path'] = FCPATH . 'assets/img/inventory_uploads/';
        $config['allowed_types'] = '*';
                $this->load->library('upload', $config);

        $field_name = 'inventory_img';
        $this->upload->initialize($config);
        if ($this->upload->do_upload($field_name)) {
            $data = $this->upload->data();
                        //insert to logs
            $insert_data= array(
             'inventory_id' =>$inventory_id,
             'image'        => $data['file_name'],
             'description'  => $inventory_img_description 
            ) ;
            $this->inventory_model->add_log($insert_data);
            
                        //insert to inventory end
            $this->session->set_flashdata('upload_success', 'Image Added Successfully');
              redirect($this->agent->referrer());              
        } else {
            $error = array('error' => $this->upload->display_errors());
              redirect($this->agent->referrer());              
        }*/

        $id = $this->input->post('work_id');
        $img_description = $this->input->post('img_description');        

        $config['upload_path'] = FCPATH . 'assets/img/work_uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = TRUE;
        $field_name = 'work_img';
        /*$config['max_size'] = '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';*/

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload($field_name)){
            $error = array('error' => $this->upload->display_errors());

            //$this->load->view('upload_form', $error);
            log_message("error",$err->getMessage());
            return show_error($err->getMessage());
        }else{
            $data = $this->upload->data();
            $insert = array(
                    'work_id' => $id,
                    'file_name' => $data['file_name'], 
                    'original_file_name' => $data['orig_name'],
                    'description'  => $img_description,
                    );
            $this->works_model->add_file($insert);            
        }
        redirect('works');
    }
}