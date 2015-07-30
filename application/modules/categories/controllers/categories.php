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

class Categories extends MX_Controller {

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
        $this->load->model('categories_model');    
    }

    public function get_subcategories(){
        $id = $this->input->post('data');
        $this->load->model('categories_model');

        $result = $result = '<option value="">-- Seleccione --</option>';
        $subcategories = $this->categories_model->get_subcategories($id);
        foreach ($subcategories as $subcategory) {
                $result .= '<option value="' . $subcategory['id'] . '" >' . $subcategory["name"] . '</option>';
            }
        echo $result;
    }
}

?>