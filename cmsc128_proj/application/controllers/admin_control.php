<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin_control extends CI_Controller {
    function __construct() {
        parent::__construct();
        //load session and connect to database
        $this->load->model('admin_login_model','login',TRUE);
        $this->load->helper(array('form', 'url','html'));
        $this->load->library(array('form_validation','session'));
    }
	
	function index(){
			$session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['username'];
			$data['role'] = $session_data['role'];
			$this->load->view($session_data['role'].'_logged_in_view', $data);
	}
	
	function generateRandomString($length) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}			
		return $randomString;
	}
    //
}
/* End of file verify_login.php */
/* Location: ./application/controllers/verify_login.php */