<?php
	/*
	session_inactivity_logout()
	Se encarga de cerrar sesión de un usuario por inactividad
	- El tiempo establecido esta expresado por la variable $timeout
	- Se toma el tiempo en que el usuario ingresa por login o a un modulo desde
	la variable de session: $CI->session->set_userdata('start_time',time())
	*/
	function session_inactivity_logout(){
		$CI = & get_instance();//get instance, access the CI superobject
		//Tiempo establecido en segundos				
		$timeout=3600;//$timeout[0];
		$redirect_url="site/home/login";		
		$CI->load->model('users/user_model', 'user_model');
		$username = $CI->session->userdata('username');
		if ($username){
			$ActiveSessionTime = strtotime($CI->user_model->getActiveSessionTime($username));			
			$elapsed_time = time() - $ActiveSessionTime;
			//$CI->session->userdata('start_time');
			if($elapsed_time >= $timeout){
				$CI->user_model->updateActiveSession($username,0);
				$CI->user_model->resetActiveSessionTime($username);
				$CI->session->sess_destroy();
				redirect('site/home/login?status=expired', 'refresh');
			}else{
				$CI->user_model->newActiveSessionTime($username);
			}
		}
	}
	/*
	without_stored_cache()
	Se establece que cada módulo del sistema no guarde caché en el navegador
	- Esta función se integra en cada contructor de cada controlador existente
	*/
	function without_stored_cache(){
		$CI = & get_instance();
		$CI->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $CI->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $CI->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $CI->output->set_header('Pragma: no-cache');
	}
	function on_login_inactivity_reset($username){
		$CI = & get_instance();//get instance, access the CI superobject
		$timeout=3600;//Tiempo establecido en segundos
		$redirect_url="site/home/login";		
		$CI->load->model('users/user_model', 'user_model');
		$ActiveSession = $CI->user_model->getActiveSession($username);
		if ($ActiveSession && $ActiveSession == 1){
			$ActiveSessionTime = strtotime($CI->user_model->getActiveSessionTime($username));			
			$elapsed_time = time() - $ActiveSessionTime;
			if($elapsed_time >= $timeout){
				$CI->user_model->updateActiveSession($username,0);
				$CI->user_model->resetActiveSessionTime($username);
			}else{
				$remaining = $timeout - $elapsed_time;
				redirect('site/home/login?status=active&remaining='.$remaining, 'refresh');
			}
		}
	}
	function no_stored_session(){
		$CI = & get_instance();
		$session_exist = $CI->session->userdata('username');
		if(!$session_exist || $session_exist='') 
			redirect('site/home/login', 'refresh');
	}
?>