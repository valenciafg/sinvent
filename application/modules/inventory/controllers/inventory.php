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

class Inventory extends MX_Controller {

    public function __construct() {
        parent::__construct();
    	$this->load->helper('sessions');
        without_stored_cache();
        session_inactivity_logout();
/*
        if($this->session->all_userdata('language') != ''){
             if($this->session->userdata('language') != '')
                $this->language = $this->session->userdata('language');
             else
                $this->language = 'english'; 
        }else{
            $this->language = 'english';
        }
*/
        $this->language = 'spanish';
        $this->role = $this->session->userdata('role');
        //$this->language = ($this->session->all_userdata('language')) ? $this->session->userdata('language') : $this->config->item('default_language'); 
        if (! $this->session->userdata('username') && $uristring != 'users/login'){
            redirect('site/home/login','refresh');; // the user is not logged in, redirect them!
        }
        $this->lang->load($this->language,  $this->language);
       // $this->lang->load($this->language, $this->language);
        $this->load->model('inventory/inventory_model');    
        // $this->lang->load('dashboard', 'english');
    }


    public function index() {
    $this->load->model('inventory/inventory_model');
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

 public function goods() {
 	$this->load->model('inventory/inventory_model');
        $this->load->model('location/location_model');
        $this->load->model('layers/layer_model');
        $this->load->model('categories/categories_model');
        $this->load->model('measuring/measuring_model');
        $data['page'] = 'inventory_articles';
                $data['language'] = $this->language;
                $data['role'] = $this->role; 

        $data['buildings'] = $this->location_model->get_all_buildings();
        $data['first_floor'] = $this->inventory_model->get_initial_floor();
        $data['first_office'] = $this->inventory_model->get_initial_office();
        $data['good_articles'] = $this->inventory_model->get_all_inventory_article();
        $data['categories'] = $this->categories_model->get_categories();
        $data['subcategories'] = $this->categories_model->get_subcategories(2);
        $data['measurings'] = $this->measuring_model->get_measurings();
        //$data['layers'] = $this->layer_model->get_all_layers();
        //$data['first_sublayer'] = $this->inventory_model->get_initial_sublayer();
        $this->load->view('good_article',$data);
    }
     public function works() {
        $this->load->model('inventory/inventory_model');
        $this->load->model('location/location_model');
        $this->load->model('layers/layer_model');
        $data['page'] = 'inventory_works';
        $data['role'] = $this->role; 
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
      
       public  function get_work_info(){        
        $work_id = $this->input->post('work_id');
        
        $this->load->model('inventory/inventory_model');
        $this->load->model('location/location_model');
        $this->load->model('layers/layer_model');
        $this->load->model('agreements/agreements_model');
        
        $data['page'] = 'inventory_works';
        $data['get_work']=$this->inventory_model->get_all_inventory_work_edit($work_id);
        $data['get_work'] = $data['get_work'][0]; 

        $data['buildings'] = $this->location_model->get_all_buildings();
        $data['first_floor'] = $this->inventory_model->get_building_floor($data['get_work']['building_id']);
        $data['first_office'] = $this->inventory_model->get_floor_office($data['get_work']['floor_id']);

        $data['good_articles'] = $this->inventory_model->get_all_inventory_article();

        $data['agreement'] = $this->agreements_model->get_agreement_info_by_number($data['get_work']['agreement_id']);
        $data['agreement'] = $data['agreement'][0];

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
     


     public  function get_articles_info(){
        
        $good_articles_id = $this->input->post('article_id');
        
        $this->load->model('inventory/inventory_model');
        $this->load->model('location/location_model');
        $this->load->model('layers/layer_model');
        $this->load->model('measuring/measuring_model');
        $this->load->model('categories/categories_model');
        $data['page'] = 'inventory_articles';
        $data['get_article']=$this->inventory_model->get_all_inventory_articles_edit($good_articles_id);
        $data['get_article'] = $data['get_article'][0];
        $data['buildings'] = $this->location_model->get_all_buildings();

        $data['first_floor'] = $this->inventory_model->get_building_floor($data['get_article']['building_id']);
        $data['first_office'] = $this->inventory_model->get_floor_office($data['get_article']['floor_id']);
        $data['good_articles'] = $this->inventory_model->get_all_inventory_article();
        $data['measurings'] = $this->measuring_model->get_measurings();
        $data['categories'] = $this->categories_model->get_categories();
        $data['subcategories'] = $this->categories_model->get_all_subcategories();
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
        $goods_category = (int)$this->input->post('goods_category');
        if($goods_category==3){         
            $data = array(
                'type' => 'goods',
                'sub_type' => 'article',
                'category' => $goods_category,
                'subcategory' => (int)$this->input->post('goods_subcategory'),
                'building_id' => (int)$this->input->post('goods_building'),
                'floor_id' => (int)$this->input->post('goods_floor'),
                'office_id' => (int)$this->input->post('goods_office'),
                'jobname' => '',
                'engineername' => '',
                'from' => '',
                'to' => '',
                'brand' => $this->input->post('article_brand'),
                'model' => $this->input->post('article_model'),
                'serial' => $this->input->post('article_serial'),
                'description' => $this->input->post('article_description'),
                'divestiture' => $this->input->post('article_divestiture'),
                'quantity' => $this->input->post('article_amount'),
                'quantity_id' => $this->input->post('goods_unit')
            );
        }else{
            $data = array(
                'type' => 'goods',
                'sub_type' => 'article',
                'category' => $goods_category,
                'subcategory' => (int)$this->input->post('goods_subcategory'),
                'jobname' => '',
                'engineername' => '',
                'from' => '',
                'to' => '',
                'brand' => $this->input->post('article_brand'),
                'model' => $this->input->post('article_model'),
                'serial' => $this->input->post('article_serial'),
                'description' => $this->input->post('article_description'),
                'divestiture' => $this->input->post('article_divestiture'),
                'quantity' => $this->input->post('article_amount'),
                'quantity_id' => $this->input->post('goods_unit')
            );
        }
        $this->inventory_model->add_inventory($data);
        redirect('inventory/goods');
    }
	function edit_article() {
        $goods_category = (int)$this->input->post('goods_edit_category');
        $good_article_id = $this->input->post('article_id');
        if($goods_category==3){         
            $data = array(                
                'category' => $goods_category,
                'subcategory' => (int)$this->input->post('goods_edit_subcategory'),
                'building_id' => (int)$this->input->post('goods_building'),
                'floor_id' => (int)$this->input->post('goods_floor'),
                'office_id' => (int)$this->input->post('goods_office'),
                'jobname' => '',
                'engineername' => '',
                'from' => '',
                'to' => '',
                'brand' => $this->input->post('article_brand'),
                'model' => $this->input->post('article_model'),
                'serial' => $this->input->post('article_serial'),
                'description' => $this->input->post('article_description'),
                'divestiture' => $this->input->post('article_divestiture'),
                'quantity' => $this->input->post('article_quantity'),
                'quantity_id' => $this->input->post('article_unit')
            );
        }else{
            $data = array(
                'category' => $goods_category,
                'subcategory' => (int)$this->input->post('goods_edit_subcategory'),
                'building_id' => NULL,
                'floor_id' => NULL,
                'office_id' => NULL,
                'jobname' => '',
                'engineername' => '',
                'from' => '',
                'to' => '',
                'brand' => $this->input->post('article_brand'),
                'model' => $this->input->post('article_model'),
                'serial' => $this->input->post('article_serial'),
                'description' => $this->input->post('article_description'),
                'divestiture' => $this->input->post('article_divestiture'),
                'quantity' => $this->input->post('article_quantity'),
                'quantity_id' => $this->input->post('article_unit')
            );
        }
        /*$type = 'goods';
        $sub_cat = 'article';
          $data = array(
            'type' => $type,
            'sub_type' => $sub_cat,
            'building_id' => (int)$this->input->post('goods_building'),
            'floor_id' => (int)$this->input->post('goods_floor'),
            'office_id' => (int)$this->input->post('goods_office'),
            'jobname' => '',
            'engineername' => '',
            'from' => '',
            'to' => '',
            'brand' => $this->input->post('article_brand'),
            'model' => $this->input->post('article_model'),
            'serial' => $this->input->post('article_serial'),
            'description' => $this->input->post('article_description'),
            'divestiture' => $this->input->post('article_divestiture')            
        );*/
        $this->inventory_model->article_edit($good_article_id,$data);
        redirect('inventory/goods');
    }
    function add_work(){
        //$sub_cat='article';   
        $type = 'works';
        $sub_cat = '';
        $data = array(
            'type' => $type,
            'sub_type' => $sub_cat,
            'building_id' => (int)$this->input->post('works_building'),
            'floor_id' => (int)$this->input->post('works_floor'),
            'office_id' => (int)$this->input->post('works_office'),
            'jobname' => $this->input->post('jobname'),
            'engineername' => $this->input->post('engineername'),
            'from' => $this->input->post('from'),
            'to' => $this->input->post('to'),
            'amount_awarded' =>$this->input->post('amount_awarded'),
            'amount_per_run' => $this->input->post('amount_per_run'),
            'physical_progress' => $this->input->post('physical_progress'),
            'financial_progress' => $this->input->post('financial_progress'),
            'agreement_id' => $this->input->post('contract_number')
        );
        $this->inventory_model->add_inventory($data);
        redirect('inventory/works');
    }

    function edit_work($work_id) {
         $work_id = $this->input->post('work_id');
        //$sub_cat='article';   
        $type = 'works';
          $data = array(
            'type' => $type,
            'building_id' => (int)$this->input->post('works_building'),
            'floor_id' => (int)$this->input->post('works_floor'),
            'office_id' => (int)$this->input->post('works_office'),
            'jobname' => $this->input->post('work_edit_jobname'),
            //'engineername' => $this->input->post('engineername'),
            'from' => $this->input->post('datepicker_edit_from'),
            'to' => $this->input->post('datepicker_edit_to'),
            /*'amount_awarded' =>$this->input->post('amount_awarded'),
            'amount_per_run' => $this->input->post('amount_per_run'),
            'physical_progress' => $this->input->post('physical_progress'),
            'financial_progress' => $this->input->post('financial_progress'),*/
            'agreement_id' => $this->input->post('edit_contract_number')
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
    public function get_good_info(){
        /*$id = $this->input->post('id');
        $data['good'] = $this->inventory_model->get_good_info($id);
        $data['good'] = $data['good'][0];*/
    }
}

/* End of file users.php */
/* Location: ./application/modules/users/controllers/users.php */
