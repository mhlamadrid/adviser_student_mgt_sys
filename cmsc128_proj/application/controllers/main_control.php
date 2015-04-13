<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main_control extends CI_Controller {
    function __construct() {
        parent::__construct();
        //load session and connect to database
        $this->load->model('admin_login_model','login',TRUE);
        $this->load->helper(array('form', 'url','html'));
        $this->load->library(array('form_validation','session'));
    }
 
    function index() {
		if(isset($_POST['logout'])){
			$this->logout();
		}
		else if(isset($_POST['generate_username'])) {
			$data['username'] = filter_var($_POST['generate_username'], FILTER_SANITIZE_STRING);
			$data['passencrypted'] = md5($this->generateRandomString(20));
			$data['role'] = 'adviser';
			$result = $this->login->insert_admin($data);
			$this->refresh_page();
		}
		else if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
			redirect($session_data['role'].'_control', 'refresh');
			
        } else {
        //If no session, redirect to login page
            $this->login();
        }
    }
	 
	function login(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
        if($this->form_validation->run() == FALSE) {
            $this->load->view('admin_login_view',NULL);
        } else {
            //Go to private area
			$this->refresh_page();
        }
	}

	function logout() {
        //remove all session data
		if($this->session->userdata('logged_in')) {
			$this->session->unset_userdata('logged_in');
			$this->session->sess_destroy();
			$this->refresh_page();
		}
		//redirect(base_url('admin_login'), 'refresh');
	}
 
    function check_database($password) {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');
        //query the database
        $result = $this->login->login($username, $password);
		if($result) {
			$sess_array = array();
			foreach($result as $row) {
				//create the session
				$sess_array = array('username' => $row->username, 'role' => $row->role);
				//set session with value from database
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return TRUE;
		} else {
			//if form validate false
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return FALSE;
		}
	}
	  
	function refresh_page() {  
		redirect('a_123456789', 'refresh');		  	  
	}
}
/* End of file verify_login.php */
/* Location: ./application/controllers/verify_login.php */