<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noaccess extends MX_Controller {
        
    
        public function __construct() {

        parent::__construct();

                $this->language = 'spanish';

         if (! $this->session->userdata('username'))
        {
            redirect('site/home/login','refresh');; // the user is not logged in, redirect them!
        }
        $this->lang->load($this->language,  $this->language);

    }
	public function index()
	{
                $data['page'] = 'noaccess';
                $data['language'] = $this->language;
               $this->load->view('noaccess_view', $data);
	}
 
}

/* End of file noaccess.php */
/* Location: ./application/modules/users/controllers/noaccess.php */