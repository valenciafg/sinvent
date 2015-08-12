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

class Groups extends MX_Controller {

    public function __construct() {

        parent::__construct();
	$this->load->helper('sessions');
        without_stored_cache();
        session_inactivity_logout();
//        if ($this->session->all_userdata('language') != '') {
//            $this->language = $this->session->userdata('language');
//        } else {
//            $this->language = $this->config->item('default_language');
//        }
                $this->language = 'spanish';
$this->role = $this->session->userdata('role');

        //$this->language = ($this->session->all_userdata('language')) ? $this->session->userdata('language') : $this->config->item('default_language'); 
        if (!$this->session->userdata('username')) {
            redirect('site/home/login', 'refresh');
           // the user is not logged in, redirect them!
        }
        $this->lang->load($this->language, $this->language);
        $this->load->model('groups/groups_model');
        $this->load->model('roles/roles_model');
        $this->load->model('applications/application_model');
        if ($this->session->userdata('role') == 'write' || $this->session->userdata('role') == 'read') {
            $action = $this->uri->segment(2);
            if($action != 'logout' && $action != 'login')
            {
            redirect('noaccess', 'refresh');
            }
        }

//         $this->lang->load('leftmenu', 'english');
//        $this->lang->load('dashboard', 'english');
    }

    public function index() {

        $data['page'] = 'group';
        $data['role'] = $this->role; 

        $data['language'] = $this->language;
        $data['groups'] = $this->groups_model->get_all_groups();
        $data['roles'] = $this->roles_model->get_all_roles();
        $data['applications'] = $this->application_model->get_all_applications();
        $this->load->view('groups_view', $data);
    }

    public function add_group() {
        $data['name'] = $this->input->post('group');
        $data['role_id'] = $this->input->post('role');
        $data['application_id'] = $this->input->post('application');
        $this->groups_model->add_group($data);
        redirect('groups');
    }

    public function update_group() {

        $id = $this->input->post('edit_group_id');
        $data['name'] = $this->input->post('edit_group');
        $data['role_id'] = $this->input->post('edit_role');
        $this->groups_model->update_group($data, $id);
        redirect('groups');
    }

    public function get_group_info() {
        $group_id = $this->input->post('group_id');
        $data['group'] = $this->groups_model->get_group_info($group_id);
        $data['roles'] = $this->roles_model->get_all_roles();
        $data['group'] = $data['group'][0];
        $this->load->view('groups/group_edit', $data);
    }
    public function delete_group()
        {
            $group_id = $this->input->post('group_id');
            $this->groups_model->delete_group($group_id);
        }

}

/* End of file users.php */
/* Location: ./application/modules/users/controllers/users.php */
