<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Layers extends MX_Controller {

    public function __construct() {

        parent::__construct();
        if ($this->session->all_userdata('language') != '') {
            $this->language = $this->session->userdata('language');
        } else {
            $this->language = $this->config->item('default_language');
        }
        //$this->language = ($this->session->all_userdata('language')) ? $this->session->userdata('language') : $this->config->item('default_language'); 
        if (!$this->session->userdata('username')) {
            redirect('site/home/login', 'refresh');
            ; // the user is not logged in, redirect them!
        }
        $this->lang->load($this->language, $this->language);
        $this->load->model('layers/layer_model');
//         $this->lang->load('leftmenu', 'english');
//        $this->lang->load('dashboard', 'english');
    }

    public function index() {
        $data['page'] = 'layers';
        $data['language'] = $this->language;
        $data['layers'] = $this->layer_model->get_all_layers();
        $data['sub_layers'] = $this->layer_model->get_first_sub_layers();
        //print_r($data);
//                $data['floors'] = $this->location_model->get_all_floors();
//                $data['buildings_floors'] = $this->location_model->get_floors_buildings();
//                $data['office_floors_buildings'] = $this->location_model->get_office_floors_buildings();
        $this->load->view('layers_view', $data);
    }

    public function add_layer() {
        
        //add_layer_icon
        //upload configuration
        //$config['max_size']	= '100';
        $config['max_width']  = '100';
        $config['max_height']  = '100';
        $config['upload_path'] = FCPATH .'assets/img/map_icons/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        $field_name = 'icon';
        $this->upload->initialize($config);
        if ($this->upload->do_upload($field_name)) {
            $data = $this->upload->data();
                        //insert to logs
            $insert_data= array(
             'layer_name' => $this->input->post('name'),
             'layer_icon'  => $data['file_name'], 
             'layer_description'  => $this->input->post('description')
            ) ;
            
        $this->layer_model->add_layer($insert_data);
                        //insert to inventory end
            $this->session->set_flashdata('success', 'Layer Added Successfully');
            redirect('layers');
        } else {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            exit;
            $this->session->set_flashdata('error', 'Layer  Could not be added');
            redirect('layers');
        }
    }
      public function edit_layer() {
                 
          if($this->input->post('submit') != FALSE)
          {
          $id = $this->input->post('layer_id');
           $data['layer_name'] = $this->input->post('name');
           $pre_image = $this->input->post('pre_image');
         $data['layer_description'] = $this->input->post('description');
           if($_FILES['new_icon'] != FALSE)
           {
             
         //upload new icon
//                   //upload configuration
        //$config['max_size']	= '100';
        $config['max_width']  = '100';
        $config['max_height']  = '100';
        $config['upload_path'] = FCPATH .'assets/img/map_icons/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        $field_name = 'new_icon';
        $this->upload->initialize($config);
        if ($this->upload->do_upload($field_name)) {
            $image_data = $this->upload->data();
            $data['layer_icon']  = $image_data['file_name'];
            $pre_image_path = FCPATH .'assets/img/map_icons/'.$pre_image;
            unlink($pre_image_path);
        }
           }
        $this->layer_model->update_layer($data,$id);
        redirect('layers');
        }
        else
        {
        redirect('layers');
        }
        
    }

    public function add_layer_item() {
        $data['layer_id'] = $this->input->post('layer_hidden_id');
        $data['item_name'] = $this->input->post('item_name');
        $data['item_address'] = $this->input->post('item_address');
        $data['item_latitude'] = $this->input->post('item_latitude');
        $data['item_longitude'] = $this->input->post('item_longitude');
        $this->layer_model->add_layer_item($data);
        header('Location: '.$_SERVER['HTTP_REFERER']);
        //redirect('layers');
    }
    public function edit_layer_item(){
        $id = $this->input->post('item_id');
       $data['layer_id'] = $this->input->post('layer_id');
       $data['item_name'] = $this->input->post('item_name');
        $data['item_address'] = $this->input->post('item_address');
        $data['item_latitude'] = $this->input->post('item_latitude');
        $data['item_longitude'] = $this->input->post('item_longitude');
        $this->layer_model->update_item($data,$id);
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    public function layer_items_list() {
        
        $layer_name = $this->uri->segment(2);
        $layer_name = urldecode($layer_name);
        $layer_info = $this->layer_model->get_layer_id($layer_name);
        $data['layer_id'] = $layer_info[0]['id']; 
        $data['page'] = 'layers';
        $data['language'] = $this->language;
        $data['layers_items'] = $this->layer_model->get_layers_items($layer_name);
//        echo '<pre>';
//        print_r($data['layers_items']);
//        $data['layer_id']   = $data['layers_items'][0]['layer_id'];
        $data['layer_name'] = $layer_name;
        //print_r($data);
//                $data['floors'] = $this->location_model->get_all_floors();
//                $data['buildings_floors'] = $this->location_model->get_floors_buildings();
//                $data['office_floors_buildings'] = $this->location_model->get_office_floors_buildings();
        $this->load->view('layers_items_list', $data);
    }
    function delete_layer()
    {
        $layer_id = $this->input->post('layer_id');
        $this->layer_model->delete_layer($layer_id);
    }
    function delete_layer_item()
    {
        $layer_item_id = $this->input->post('layer_item_id');
        $this->layer_model->delete_layer_item($layer_item_id);
    }



}

/* End of file users.php */
/* Location: ./application/modules/users/controllers/users.php */