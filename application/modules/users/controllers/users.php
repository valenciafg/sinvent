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

class Users extends MX_Controller {
    protected $suspended_time = 120;//Minutos expresados en segundos
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('sessions');
        without_stored_cache();
        session_inactivity_logout();
        $uristring = uri_string();
        $this->language = 'spanish';
        $this->role = $this->session->userdata('role');
        if (!$this->session->userdata('username') && $uristring != 'users/login') {
            redirect('site/home/login', 'refresh'); // the user is not logged in, redirect them!
        }
        $this->lang->load($this->language, $this->language);

        if ($this->session->userdata('role') == 'write' || $this->session->userdata('role') == 'read') {
            $action = $this->uri->segment(2);
            if($action != 'logout' && $action != 'login'){
            redirect('noaccess', 'refresh');
            }
        }
        $this->load->model('users/user_model', 'user_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['page'] = 'user';
        $data['role'] = $this->role;

        $data['language'] = $this->language;
        $this->load->model('groups/groups_model');
        $data['groups'] = $this->groups_model->get_all_groups();
        $data['users'] = $this->user_model->get_all_users();
        $this->load->view('users_view', $data);
    }

    public function add() {

        if ($this->input->post('submit', TRUE)) {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'email' => $this->input->post('email'),
                'group_id' => $this->input->post('group'),
                'language' => 'spanish'
            );
            $this->user_model->add_user($data);
        }
        redirect("users");
    }

    public function edit_user() {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'email' => $this->input->post('email'),
            'group_id' => $this->input->post('group'),
            'language' => 'spanish'
        );
        $userid = $this->input->post('userid');
        $this->user_model->update_user($data, $userid);
        redirect("users");
    }

    public function login() {
        if (isset($_POST)){
            $data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password'))
            );
            //if($data['username'] == 'admin'){
                $user_details = $this->user_model->checkUser($data);                
                //Si usuario y contraseña son correctos
                if (!empty($user_details)){
                    $active_session = $user_details['active_session'];
                    if($active_session == 0){                    
                        $suspended_user = $user_details['suspended'];
                        if ($suspended_user > 1){
                            $this->user_model->updateActiveSession($user_details['username'],1);
                            $role_data = $this->user_model->getRole($user_details['group_id']);
                            $role = $role_data[0]['name'];
                            $userarray = array(
                                'username' => $user_details['username'],
                                'language' => $user_details['language'],
                                'email' => $user_details['email'],
                                'group' => $user_details['group_id'],
                                'cargo' => $user_details['cargo'],
                                'role' => $role,
                                'application' => $user_details['app_name'],
                                'start_time' => time() //tiempo de espera de inicio de sesion

                            );
                            $this->session->set_userdata($userarray);
                            $this->user_model->resetSuspendedUser($user_details['username']);
                            redirect('dashboard', 'refresh');
                        }else{
                            $elapsed_time = strtotime(date('Y-m-d G:i:s')) - strtotime($user_details['suspended_start_time']);
                            $remaining = $this->suspended_time - $elapsed_time;
                            if($remaining <= 0){
                                $role_data = $this->user_model->getRole($user_details['group_id']);
                                $role = $role_data[0]['name'];
                                $userarray = array(
                                    'username' => $user_details['username'],
                                    'language' => $user_details['language'],
                                    'email' => $user_details['email'],
                                    'group' => $user_details['group_id'],
                                    'cargo' => $user_details['cargo'],
                                    'role' => $role,
                                    'application' => $user_details['app_name'],
                                    'start_time' => time() //tiempo de espera de inicio de sesion
                                );
                                $this->session->set_userdata($userarray);
                                $this->user_model->resetSuspendedUser($user_details['username']);
                                redirect('dashboard', 'refresh');
                            }else
                                //Redirecciona sí el usuario está suspendido y aún tenga tiempo restante
                                redirect('site/home/login?status=suspended&remaining='.$remaining, 'refresh');
                        }
                    }else{
                        //on_login_inactivity_reset($user_details['username']);
                        redirect('site/home/login?status=active', 'refresh');
                    }
                }else {
                    $user_details = $this->user_model->checkUsername($this->input->post('username'));
                    $user_details = $user_details[0];
                    //Usuario es correcto
                    if (!empty($user_details)){
                        if($user_details['active_session']==1)
                            redirect('site/home/login?status=failure', 'refresh');
                        $failed_attempts = $user_details['suspended']-1;
                        //Redirecciona cuando el usuario existe en la BD pero ingresó mal la contraseña, 
                        //Ha ocurrido más de tres intentos fallidos, se procede a suspender al usuario
                        if($failed_attempts==0){
                            $this->user_model->updateSuspendedTime($this->input->post('username'));
                            $this->user_model->updateSuspendedUser($this->input->post('username'),$failed_attempts);
                            redirect('site/home/login?status=suspended&remaining='.$this->suspended_time, 'refresh');
                        //Aún no se ha llegado al límite de intentos fallidos
                        }elseif ($failed_attempts > 0) {
                            $this->user_model->updateSuspendedUser($this->input->post('username'),$failed_attempts);
                        //El usaurio ya está suspendido
                        }elseif ($failed_attempts < 0) {                        
                            $elapsed_time = strtotime(date('Y-m-d G:i:s')) - strtotime($user_details['suspended_start_time']);
                            $remaining = $this->suspended_time - $elapsed_time;
                            if($remaining < 0){
                                $this->user_model->resetSuspendedUser($user_details['username']);
                                redirect('site/home/login?status=suspended', 'refresh');
                            }else
                                redirect('site/home/login?status=suspended&remaining='.$remaining, 'refresh');
                        }
                    }
                    redirect('site/home/login?status=failure', 'refresh');
                }
//VALIDACIÓN CON LDAP                
            /*}else{
                //redirect('site/home/login?status=prueba', 'refresh');
                //$this->load->library("Soapclient");
                //$estado = $this->Soapclient->iniciarSesion();
                $this->load->library('clienteseguridadweb');
                $estado = $this->clienteseguridadweb->iniciarSesion($data['username'],$data['password'],"",0);
                //Si se encuentra en la DB de la app                
                $user_details = $this->user_model->checkUsername($data['username']);
                $user_details = $user_details[0];
                //Validado satifactoriamente
                if(strcmp($estado['codigoMensaje'], '01') == 0){
                    if(!isset($user_details)){
                        $user_details = array(
                            'username' => $data['username'],
                            'language' => "spanish",
                            'email' => $data['username']."@mail.com",
                            'group_id' => 1
                        );
                        $this->user_model->add_user($user_details);
                    }
                    $this->user_model->updateActiveSession($user_details['username'],1);
                    
                    $role_data = $this->user_model->getRole($user_details['group_id']);
                    $role = $role_data[0]['name'];
                    $userarray = array(
                        'username' => $data['username'],
                        'language' => $user_details['language'],
                        'email' => $user_details['email'],
                        'group' => $user_details['group_id'],
                        'cargo' => $user_details['cargo'],
                        'role' => $role,
                        'start_time' => time() //tiempo de espera de inicio de sesion
                    );
                    $this->session->set_userdata($userarray);
                    $this->user_model->resetSuspendedUser($user_details['username']);
                    redirect('dashboard', 'refresh');

                //Usuario/Clave invalida
                }elseif (strcmp($estado['codigoMensaje'], '02') == 0) {
                    redirect('site/home/login?status=failure', 'refresh');

                //usuario con doble autenticación
                }elseif (strcmp($estado['codigoMensaje'], '03') == 0) {
                    redirect('site/home/login?status=active', 'refresh');

                //Usuario validado satisfactoriamente (Forzando Credenciales por Inactividad)
                }elseif (strcmp($estado['codigoMensaje'], '04') == 0) {
                    redirect('site/home/login?status=expired', 'refresh');

                //Aplicacion no registrada
                }elseif (strcmp($estado['codigoMensaje'], '05') == 0) {
                    redirect('site/home/login?status=application', 'refresh');
                }
            }*/
        }else{
            redirect('site/home/login', 'refresh');
        }
    }

    public function logout() {
        $this->user_model->updateActiveSession($this->session->userdata('username'),0);
        $this->user_model->resetActiveSessionTime($this->session->userdata('username'));
        $useritems = array(
            'username' => '',
            'language' => '',
            'email' => '',
            'group' => '',
            'cargo' => ''
        );
        $this->session->unset_userdata($useritems);
        $this->session->sess_destroy();
        redirect('site/home/login', 'refresh');
    }

    public function get_user_info() {
        $user_id = $this->input->post('user_id');
        $data['user'] = $this->user_model->get_user_info($user_id);
        //$data['user'] = $data['user'][0];
        $this->load->model('groups/groups_model');
        $data['groups'] = $this->groups_model->get_all_groups();
        $this->load->view('users/user_edit', $data);
    }

    public function delete_user() {
        $user_id = $this->input->post('user_id');
        $this->user_model->delete_user($user_id);
    }
}

/* End of file users.php */
/* Location: ./application/modules/users/controllers/users.php */