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
		
		$filePath = 'C:\xampp\htdocs\cmsc128_proj\application\views\adviser\dummy.csv';
		$data['csvData'] = $this->csvreader->parse_file($filePath);
		
		$this->load->view($session_data['role'].'/'.$session_data['role'].'_logged_in_view', $data);
	}
	
	public function search_student()
	{
		//get adviser id
		$adviser_id = 0;
		//get name from post
		$stud_name = "asd";
		
		$this->view(
				$this->filtered_search_student_model->get_by_adviser_by_name($adviser_id, $stud_name)
			);
	}
	
	public function search_registered()
	{
		//get adviser id
		$adviser_id = 0;
		
		$this->view(
				$this->filtered_search_student_model->get_registered_by_adviser($adviser_id)
			);
	}
	
	public function search_graduated()
	{
		//get adviser id
		$adviser_id = 0;
		
		//get year from post
		$year = 0;
		
		$this->view(
				$this->filtered_search_student_model->get_graduated_by_adviser_by_year($adviser_id, $year)
			);
	}
	public function search_previous()
	{
		//get adviser id
		$adviser_id = 0;
		
		$this->view(
				$this->filtered_search_student_model->get_previous_by_adviser($adviser_id)
			);
	}
	public function search_dismissed()
	{
		//get adviser id
		$adviser_id = 0;
		
		$this->view(
				$this->filtered_search_student_model->get_dismissed_by_adviser($adviser_id)
			);
	}
    //

    /* Request contact information */
    public function adviserRequest()
    {
    	//seacrh for student pass to requestInfo();
    	$session_data = $this->session->userdata('logged_in');
    	//seacrh for student pass to requestInfo();
    	$student_no =  "2012-12345";
    	$this->view($this->adviser_request_model->requestInfo($session_data['username'], $student_no));
    	//load view
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

