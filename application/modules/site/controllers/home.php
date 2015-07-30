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

class Home extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}	
	
	public function index(){
	
		$this->load->view('site/home');
//		$this->template->set_layout('site_layout');		
//		$this->template->build('view', $data);
		
	}
	
public function login(){
			$this->load->view('login');
	}
	
	public function login_process()
	{
	
		$this->form_validation->set_rules('email', 'Email','required|valid_email');
		$this->form_validation->set_rules('password', 'Password','required');
		$this->form_validation->set_rules('userType', 'userType','required');
		if($this->form_validation->run() == FALSE)
		{

                  
                //redirect('admin/dashboard');
	       $this->login();
		}else{
			
			$userType = $this->input->post('userType');
			
			$result = $this->home_model->checkLoginForm($this->input->post());
		
			if($result)
			{	
				$this->session->unset_userdata('login_fail_msg');
				
				switch(strtoupper($userType)){
					case "ADMIN":
					
							//Save Admin data into session
							$data							=	array($result);
							foreach($data as $value)
							{
								
								$adminInfo	    = array(
														"adminID"			=> $value->admin_id,
														"admin_email"		=> $value->admin_email,
														"admin_password"		=> $value->admin_password,
														"type"			=> 'admin'
								);
							}
							$this->session->set_userdata($adminInfo);
							
                                                        
								
							// End of saving session
					
						redirect('admin/dashboard');	
						break;
					case "COMP":
						//Save Company data into session
							$data							=	array($result);
							foreach($data as $value)
							{
								
								$companyInfo	    = array(
														"companyID"			=> $value->comp_id,
														"company_email"		=> $value->comp_email,
														"company_pass"		=> $value->comp_pass,
														"type"				=> 'company'	
								);
							}
							$this->session->set_userdata($companyInfo);
						
						// End of saving session	
					
						redirect('company_mod/company_mod');
						break;
					case "SUP":
							//Save supplier data into session
							$data							=	array($result);
							foreach($data as $value)
							{
								
								$supplierInfo	    = array(
														"supplierID"		=> $value->sup_id,
														"supplier_email"	=> $value->sup_email,
														"supplier_pass"		=> $value->sup_password,		
														"type"				=> 'supplier'
								);
							}
							$this->session->set_userdata($supplierInfo);
							
							
							// End of saving session
							redirect('supplier_mod/supplier_mod');
						break;
					case "USER":
					
							//Save User data into session
							$data							=	array($result);
							
							foreach($data as $value)
							{
								
								$userInfo	    = array(
														"user_id"		=> $value->user_id,
														"user_email"	=> $value->user_email,
                                                                                                                "companyid"	=> $value->comp_id,
					  								       "user_pass"		=> $value->user_pass,
														"type"			=> 'user'
								);
							}
							$this->session->set_userdata($userInfo);
					
					
						// End of saving session
						redirect('user_mod/user_mod');
						break;			
					default:
						redirect('site/home');
				}
				
				
			}else{
				$this->session->set_userdata('login_fail_msg', 'Sorry, Please provide valid email/password');
				$this->login();
				
			}
		}
		
		
	}
	
	

}