<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Adviser_control extends CI_Controller {
    function __construct() {
        parent::__construct();
        //load session and connect to database
        $this->load->model(array('admin_login_model','adviser_model'));
        $this->load->helper(array('form', 'url','html'));
        $this->load->library(array('form_validation','session','csvreader'));
    }
	
	function index(){
			$session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['username'];
			$data['role'] = $session_data['role'];
			
			$this->load->library('csvreader');
			$filePath = 'C:\wamp\www\cmsc128_proj\application\views\dummy.csv';
			$data['csvData'] = $this->csvreader->parse_file($filePath);
			$data['page'] = "initial";
			
			$this->load->view('adviser', $data);
	}
		
		public function good(){
			$data['page'] = "good_view";
			$filePath = 'C:\wamp\www\cmsc128_proj\application\views\dummy.csv';
		    $data['csvData'] = $this->csvreader->parse_file($filePath);
			$this->load->view('adviser', $data);
		}

		public function probation(){
			$data['page'] = "probation_view";
			$filePath = 'C:\wamp\www\cmsc128_proj\application\views\dummy.csv';
		    $data['csvData'] = $this->csvreader->parse_file($filePath);
			$this->load->view("adviser", $data);
		}

		public function dismissed(){
			$data['page'] = "dismissed_view";
			$filePath = 'C:\wamp\www\cmsc128_proj\application\views\dummy.csv';
		    $data['csvData'] = $this->csvreader->parse_file($filePath);
			$this->load->view("adviser", $data);
		}
		
		function adviserRequest(){
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['role'] = $session_data['role'];
        $this->adviser_model->requestInfo();
        $this->load->view($session_data['role'].'_logged_in_view', $data);
		}
    //
}
/* End of file verify_login.php */
/* Location: ./application/controllers/verify_login.php */