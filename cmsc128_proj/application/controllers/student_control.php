<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Student_control extends CI_Controller {
    function __construct() {
        parent::__construct();
        //load session and connect to database
        $this->load->model(array('admin_login_model', 'student_model'));
        $this->load->helper(array('form', 'url','html'));
        $this->load->library(array('form_validation','session'));
    }
	
	function index(){
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['role'] = $session_data['role'];
			$this->load->view($session_data['role'].'_logged_in_view', $data);
			
		} else {
			//If no session, redirect to login page
			header("Location: ../");
		}
	}

	function studentShowNotifs(){
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['role'] = $session_data['role'];
		$data['result'] = $this->student_model->studentShowNotifs();
		$this->load->view($session_data['role'].'_logged_in_view', $data);
	}

	function approveRequest(){
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['role'] = $session_data['role'];
		$this->student_model->approveRequest($this->input->post('msg_id'));
		$this->load->view($session_data['role'].'_logged_in_view', $data);
	}

	function rejectRequest(){
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['role'] = $session_data['role'];
		$this->student_model->rejectRequest($this->input->post('msg_id'));
		$this->load->view($session_data['role'].'_logged_in_view', $data);
	}
    //
}
/* End of file verify_login.php */
/* Location: ./application/controllers/verify_login.php */