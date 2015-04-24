<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Student_control extends CI_Controller {
    function __construct() {
        parent::__construct();
		if(!$this->session->userdata('logged_in')) redirect('main_control', 'refresh'); //added		
        $this->load->model('student_request_model');
		$this->load->model('appointment_model');
		$this->load->model('student_doc_process_model');
        $this->load->helper(array('url', 'array'));
    }

    function index(){
		//if(!$this->session->userdata('logged_in')) redirect('main_control', 'refresh');

		header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
		header('Cache-Control: no-store, no-cache, must-revalidate');
		header('Cache-Control: post-check=0, pre-check=0', FALSE);
		header('Pragma: no-cache');				
		
		$this->view(null);

	}	

	function view($result){
		$session_data = $this->session->userdata('logged_in');
		
		//DATA
		$data['username'] = $session_data['username'];
		$data['role'] = $session_data['role'];
		$data['notifications'] = null;
		$data['result'] = $result;
		
		$this->load->view($session_data['role'].'/'.$session_data['role'].'_logged_in_view', $data);
	}

	/* Submission of Documents */
	public function insertDocumentData() {
		//$this->load->library('form_validation');
		$transactionType = $this->input->post('type');
		$studentNumber = $this->input->post('studentno');
		$crs_no1 = $this->input->post('crs_no1');
		$crs_no2 = $this->input->post('crs_no2');
		$crs_no3 = $this->input->post('crs_no3');
		$crs_title1 = $this->input->post('crs_title1');
		$crs_title2 = $this->input->post('crs_title2');
		$crs_title3 = $this->input->post('crs_title3');
		$newcrs_no1 = $this->input->post('newcrs_no1');
		$newcrs_no2 = $this->input->post('newcrs_no2');
		$newcrs_no3 = $this->input->post('newcrs_no3');
		$newcrs_title1 = $this->input->post('newcrs_title1');
		$newcrs_title2 = $this->input->post('newcrs_title2');
		$newcrs_title3 = $this->input->post('newcrs_title3');
		$sem1 = $this->input->post('sem1');
		$sem2 = $this->input->post('sem2');	
		$sem3 = $this->input->post('sem3');
		$justification = $this->input->post('justification');
	
		$this->student_doc_process_model->updateDocumentTable($doc_id,
											 $transactionType, 
										     $studentNumber,
										     $crs_no1,
										     $crs_title1,
										     $crs_no2,
										     $crs_title2,
										     $crs_no3,
										     $crs_title3,
										     $newcrs_no1,
										     $newcrs_no2,
										     $newcrs_no3,
										     $newcrs_title1,
										     $newcrs_title2,
										     $newcrs_title3,
										     $sem1,
										     $sem2,
										     $sem3,
										     $justification);
	}

    /* Request Contact info approve/reject request */
    public function studentShowNotifs(){
    	$session_data = $this->session->userdata('logged_in');
		$this->view($this->student_request_model->studentShowNotifs($session_data['username']));
	}

	public function approveRequest(){
		$session_data = $this->session->userdata('logged_in');
		$this->view($this->student_request_model->approveRequest($this->input->post('msg_id'), $session_data['username']));
	}

	public function rejectRequest(){
		$this->view($this->student_request_model->rejectRequest($this->input->post('msg_id')));
	}
	
	public function data_submitted() { 
	
		$session_data = $this->session->userdata('logged_in');
		$data = array(
			'agenda' => $this->input->get('agenda'),
			'date' => $this->input->get('date'),
			'time' => $this->input->get('time')
		);
		$this->view($this->appointment_model->requestAppointment($session_data['username'], $data));
		redirect('main_control', 'refresh');
	}
	// end of request contact info
}
/* End of file verify_login.php */
/* Location: ./application/controllers/verify_login.php */