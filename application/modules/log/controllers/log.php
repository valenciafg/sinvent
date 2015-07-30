<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Log extends MX_Controller {
        
    
        public function __construct() {
            
        parent::__construct();
         if (! $this->session->userdata('username'))
        {
            redirect('site/home/login','refresh');; // the user is not logged in, redirect them!
        }
         $this->lang->load('leftmenu', 'english');
        $this->lang->load('dashboard', 'english');
    }
	public function index()
	{
		$data['page'] = 'log';
                $this->load->view('log_view', $data);
	}
}

/* End of file users.php */
/* Location: ./application/modules/users/controllers/users.php */