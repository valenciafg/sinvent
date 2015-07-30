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

class Dashboard extends MX_Controller {

    public function __construct() {

        parent::__construct();
	$this->load->helper('sessions');
        without_stored_cache();
        session_inactivity_logout();
//                  if($this->session->all_userdata('language') != '')
//        {
//             if($this->session->userdata('language') != '')
//             $this->language = $this->session->userdata('language');
//             else
//             $this->language = 'english';
//                 
//        }
//        else
//        {
//            
//            $this->language = 'english';
//        }
        $this->language = 'spanish';
$this->role = $this->session->userdata('role');
        //$this->language = ($this->session->all_userdata('language')) ? $this->session->userdata('language') : $this->config->item('default_language'); 
      if (! $this->session->userdata('username') && $uristring != 'users/login')
        {
            redirect('site/home/login','refresh');; // the user is not logged in, redirect them!
        }
        $this->lang->load($this->language,  $this->language);
       // $this->lang->load($this->language, $this->language);
        $this->load->model('inventory/inventory_model');

    // $this->lang->load('dashboard', 'english');
    }


    public function index1() {
    $this->load->model('inventory/inventory_model');
        $this->load->model('location/location_model');
        $this->load->model('layers/layer_model');
        $data['page'] = 'inventory_locations';
        $data['language'] = $this->language;
        $data['buildings'] = $this->location_model->get_all_buildings();
        $data['first_floor'] = $this->inventory_model->get_initial_floor();
        $data['first_office'] = $this->inventory_model->get_initial_office();
        $data['locations'] = $this->inventory_model->get_all_inventory_location();
        $data['layers'] = $this->layer_model->get_all_other_layers();
        $data['first_sublayer'] = $this->inventory_model->get_initial_sublayer();
        $this->load->view('goods_location', $data);
    }

 public function index() {
 	$this->load->model('inventory/inventory_model');
        $this->load->model('location/location_model');
        $this->load->model('layers/layer_model');
        $data['page'] = 'dashboard';
                $data['language'] = $this->language;
                $data['role'] = $this->role; 
        $data['buildings'] = $this->location_model->get_all_buildings();
        $data['first_floor'] = $this->inventory_model->get_initial_floor();
        $data['first_office'] = $this->inventory_model->get_initial_office();
        $data['good_articles'] = $this->inventory_model->get_all_inventory_article();
        //work start
        $data['works'] = $this->inventory_model->get_all_inventory_work();
        //work end
        
        $this->load->view('dashboard_view',$data);
    }
     public function works() {
     $this->load->model('inventory/inventory_model');
        $this->load->model('location/location_model');
        $this->load->model('layers/layer_model');
        $data['page'] = 'inventory_works';
                $data['language'] = $this->language;
        $data['buildings'] = $this->location_model->get_all_buildings();
        $data['first_floor'] = $this->inventory_model->get_initial_floor();
        $data['first_office'] = $this->inventory_model->get_initial_office();
        $data['works'] = $this->inventory_model->get_all_inventory_work();
        //$data['layers'] = $this->layer_model->get_all_layers();
        //$data['first_sublayer'] = $this->inventory_model->get_initial_sublayer();
        $this->load->view('work', $data);
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
      
       public  function get_work_info($work_id)
        {
        //echo"get_work_info";
        
        $this->load->model('inventory/inventory_model');
        $this->load->model('location/location_model');
        $this->load->model('layers/layer_model');
        $data['page'] = 'inventory_works';
        $data['buildings'] = $this->location_model->get_all_buildings();
        $data['first_floor'] = $this->inventory_model->get_initial_floor();
        $data['first_office'] = $this->inventory_model->get_initial_office();
        $data['good_articles'] = $this->inventory_model->get_all_inventory_article();
        $data['get_works']=$this->inventory_model->get_all_inventory_work_edit($work_id);
       
        //$data['layers'] = $this->layer_model->get_all_layers();
        //$data['first_sublayer'] = $this->inventory_model->get_initial_sublayer();
       
  $this->load->view('work_edit',$data);
    }
     
       public  function get_location_info ($good_location_id)
        {
        //echo"get_work_info";
         $inventory_id = $this->input->post('inventoy_id');
        $this->load->model('inventory/inventory_model');
        $this->load->model('location/location_model');
        $this->load->model('layers/layer_model');
        $data['page'] = 'inventory_locations';
        $data['buildings'] = $this->location_model->get_all_buildings();
        $data['first_floor'] = $this->inventory_model->get_initial_floor();
        $data['first_office'] = $this->inventory_model->get_initial_office();
        $data['good_articles'] = $this->inventory_model->get_all_inventory_article();
        $data['get_location']=$this->inventory_model->get_all_inventory_location_edit($good_location_id);
        $data['layers'] = $this->layer_model->get_all_layers();
        $data['first_sublayer'] = $this->inventory_model->get_initial_sublayer();
       
  $this->load->view('location_edit',$data);
    }
     


     public  function get_articles_info($good_articles_id)
        {
        
        
        $this->load->model('inventory/inventory_model');
        $this->load->model('location/location_model');
        $this->load->model('layers/layer_model');
        $data['page'] = 'inventory_articles';
        $data['buildings'] = $this->location_model->get_all_buildings();
        $data['first_floor'] = $this->inventory_model->get_initial_floor();
        $data['first_office'] = $this->inventory_model->get_initial_office();
        $data['good_articles'] = $this->inventory_model->get_all_inventory_article();
        $data['get_articles']=$this->inventory_model->get_all_inventory_articles_edit($good_articles_id);
        
        //$data['layers'] = $this->layer_model->get_all_layers();
        //$data['first_sublayer'] = $this->inventory_model->get_initial_sublayer();
       
  $this->load->view('article_edit',$data);
    }
function add_location() {
        
           $data = array(
            'type' => 'goods',
            'sub_type' => 'location',
            'layer_id' => $this->input->post('layer_select'),
            'sub_layer_id' => $this->input->post('sub_layer_select'),
            'building_id' => '',
            'floor_id' => '',
            'office_id' => '',
            'jobname' => '',
            'engineername' => '',
            'from' => '',
            'to' => '',
           'brand' => $this->input->post('location_brand'),
            'model' => $this->input->post('location_model'),
            'serial' => $this->input->post('location_serial'),
            'description' => $this->input->post('location_description')
         );
       
            
        $this->inventory_model->add_inventory($data);
        redirect('inventory');
    }

    function get_location_edit($good_location_id) {
        
           $data = array(
            'type' => 'goods',
            'sub_type' => 'location',
            'layer_id' => $this->input->post('layer_select'),
            'sub_layer_id' => $this->input->post('sub_layer_select'),
            'building_id' => '',
            'floor_id' => '',
            'office_id' => '',
            'jobname' => '',
            'engineername' => '',
            'from' => '',
            'to' => '',
           'brand' => $this->input->post('location_brand'),
            'model' => $this->input->post('location_model'),
            'serial' => $this->input->post('location_serial'),
            'description' => $this->input->post('location_description')
         );
       
            
        $this->inventory_model->location_edit($good_location_id,$data);
        redirect('inventory');
    }
     function add_article() {
     
        //$sub_cat='article';   
        $type = 'goods';
        $sub_cat = 'article';
          $data = array(
            'type' => $type,
            'sub_type' => $sub_cat,
            'building_id' => $this->input->post('goods_building'),
            'floor_id' => $this->input->post('goods_floor'),
            'office_id' => $this->input->post('goods_office'),
            'jobname' => '',
            'engineername' => '',
            'from' => '',
            'to' => '',
            'brand' => $this->input->post('article_brand'),
            'model' => $this->input->post('article_model'),
            'serial' => $this->input->post('article_serial'),
            'description' => $this->input->post('article_description'),
            'divestiture' => $this->input->post('article_divestiture')
        );
               $this->inventory_model->add_inventory($data);
        redirect('inventory/goods');
    }
	function articles($good_article_id) {
//           print_r($this->input->post());
//            exit;
        //$sub_cat='article';   
         $type = 'goods';
        $sub_cat = 'article';
          $data = array(
            'type' => $type,
            'sub_type' => $sub_cat,
            'building_id' => $this->input->post('goods_building'),
            'floor_id' => $this->input->post('goods_floor'),
            'office_id' => $this->input->post('goods_office'),
            'jobname' => '',
            'engineername' => '',
            'from' => '',
            'to' => '',
            'brand' => $this->input->post('article_brand'),
            'model' => $this->input->post('article_model'),
            'serial' => $this->input->post('article_serial'),
            'description' => $this->input->post('article_description'),
            'divestiture' => $this->input->post('article_divestiture')
            
        );
       // print_r($data);
       // exit;
               $this->inventory_model->article_edit($good_article_id,$data);
        redirect('inventory/goods');
    }
function add_work()
     {
        //$sub_cat='article';   
            $type = 'works';
            $sub_cat = '';
            $data = array(
            'type' => $type,
            'sub_type' => $sub_cat,
            'building_id' => $this->input->post('works_building'),
            'floor_id' => $this->input->post('works_floor'),
            'office_id' => $this->input->post('works_office'),
            'jobname' => $this->input->post('jobname'),
            'engineername' => $this->input->post('engineername'),
            'from' => $this->input->post('from'),
            'to' => $this->input->post('to'),
           'brand' =>'',
            'model' => '',
         'serial' => '',
           'description' => ''
            
        );
                      $this->inventory_model->add_inventory($data);
        redirect('inventory/works');
    }
    function edit_work($work_id) {
     
        //$sub_cat='article';   
        $type = 'works';
        $sub_cat = '';
          $data = array(
            'type' => $type,
            'sub_type' => $sub_cat,
            'building_id' => $this->input->post('works_building'),
            'floor_id' => $this->input->post('works_floor'),
            'office_id' => $this->input->post('works_office'),
            'jobname' => $this->input->post('jobname'),
            'engineername' => $this->input->post('engineername'),
            'from' => $this->input->post('from'),
            'to' => $this->input->post('to'),
           'brand' =>'',
            'model' => '',
         'serial' => '',
           'description' => ''
            
        );
                      $this->inventory_model->edit_work($work_id,$data);
        redirect('inventory/works');
    }
    function get_layer_items()
    {
        $layer_id = $this->input->post('layer_id');
        $layer_items = $this->inventory_model->get_layer_items($layer_id);
          $result = '';
        if(sizeof($layer_items)>0)
        {
       
            foreach($layer_items as $item)
         {
             $item_id = $item["id"];
             $item_name = $item['item_name'];
                $result .= '<option value="'.$item["id"].'">'.$item["item_name"].'</option>';
         }
        }
        else
        {
            $result .= '<option value="0">--seleccione--</option>';
        }
       echo $result;
    }

 function do_upload() {

        $inventory_id = $this->input->post('inventory_id');
        $inventory_img_description = $this->input->post('inventory_img_description');
        //upload configuration
        //$config['max_size']	= '100';
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
        }
    }
    function get_inventory_logs()
    {
        $inventory_id = $this->input->post('inventory_id');
        $log_items = $this->inventory_model->get_inventory_logs($inventory_id);
        $data['logs'] = $log_items;
        $data['language'] = $this->language;
        echo $this->load->view('inventory/log_view', $data);
    }
  public function delete_inventory()
        {
            $inventory_id = $this->input->post('inventory_id');
            $this->inventory_model->delete_inventory($inventory_id);
        }
        public function delete_log()
        {
            $log_id = $this->input->post('log_id');
            $this->inventory_model->delete_log($log_id);
        }
        
 public function delete_work()
        {
            $work_id = $this->input->post('work_id');
            $this->inventory_model->delete_work($work_id);
        }        

}

/* End of file users.php */
/* Location: ./application/modules/users/controllers/users.php */
