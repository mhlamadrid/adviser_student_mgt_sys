<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Adviser_control extends CI_Controller {
    function __construct() {
        parent::__construct();
		if(!$this->session->userdata('logged_in')) redirect('main_control', 'refresh'); //added
		$this->load->model(array('filtered_search_student_model', 'adviser_request_model'));
		$this->load->library('csvreader');
	}
	
	function index(){
		//if(!$this->session->userdata('logged_in')) redirect('main_control', 'refresh');
		
		header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
		header('Cache-Control: no-store, no-cache, must-revalidate');
		header('Cache-Control: post-check=0, pre-check=0', FALSE);
		header('Pragma: no-cache');		
		
		$this->view(null);
	}	
	/*
	*	SEARCH Related FUNCTIONS
	*/
	function view($search_results)
	{
		$session_data = $this->session->userdata('logged_in');
		
		//DATA
		$data['username'] = $session_data['username'];
		$data['role'] = $session_data['role'];
		$data['graduate_years'] = array(2006, 2009, 2011);
		$data['notifications'] = array("Notif 1", "Notif 2");
		$data['appointments'] = array("Appoint 1", "Appoint 2");
		$data['search_results'] = $search_results;
		
		$filePath = 'C:\wamp\www\cmsc128_proj\application\views\adviser\dummy.csv';
		$data['csvData'] = $this->csvreader->parse_file($filePath);
		
		$this->load->view($session_data['role'].'/'.$session_data['role'].'_logged_in_view', $data);
	}
	
	/*
	*	SEARCH Related FUNCTIONS
	*/	
	public function search_by_name(){
		//$adv_id = $this->input->post('adv_id');
		$srch_param = $this->input->post('srch_param');
		
		$data['search_param'] = $srch_param;
		$data['students'] = $this->filtered_search_student_model->get_by_name($srch_param);
	
		$this->load->view('adviser/search_results', $data);
	}
	
	public function search_registered()
	{
		$adv_id = $this->input->post('adv_id');
		
		$data['search_param'] = "Registered Students";
		$data['search_results'] = $this->filtered_search_student_model->get_all();
		$this->load->view('adviser/search_results', $data);
	}
	
	public function search_graduated()
	{
		$adv_id = $this->input->post('adv_id');
		$srch_param = $this->input->post('srch_param');
		
		$data['search_param'] = $srch_param;
		$data['search_results'] = $this->filtered_search_student_model->get_all();
		$this->load->view('adviser/search_results', $data);
	}
	
	public function search_previous()
	{
		$adv_id = $this->input->post('adv_id');
		
		$data['search_param'] = "Previous Students";
		$data['search_results'] = $this->filtered_search_student_model->get_all();
		$this->load->view('adviser/search_results', $data);
	}
	
	public function search_dismissed()
	{
		$adv_id = $this->input->post('adv_id');
		
		$data['search_param'] = "Dismissed Students";
		$data['search_results'] = $this->filtered_search_student_model->get_all();
		$this->load->view('adviser/search_results', $data);
	}
    //

    /* Request contact information */
    public function adviserRequest()
    {
    	//seacrh for student pass to requestInfo();
    	$session_data = $this->session->userdata('logged_in');
    	//seacrh for student pass to requestInfo();
    	$student_no =  $this->input->post('stud_num');
    	$this->adviser_request_model->requestInfo($session_data['username'], $student_no);
    }

    public function adviserShowNotifs()
    {
    	$session_data = $this->session->userdata('logged_in');

		$this->view(
			$this->adviser_request_model->adviserShowNotifs($session_data['username'])
		);
		//$this->load->view('adviser_request', $result); Load View
	}
	
	
}
/* End of file verify_login.php */
/* Location: ./application/controllers/verify_login.php */

