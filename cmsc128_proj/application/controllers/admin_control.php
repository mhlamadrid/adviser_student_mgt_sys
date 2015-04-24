<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_control extends CI_Controller {
    function __construct() {		
		parent::__construct();
		if(!$this->session->userdata('logged_in')) redirect('main_control', 'refresh'); //added
		$this->load->model('filtered_search_adviser_model', 'adviser_mdl', TRUE);
		$this->load->model('filtered_search_student_model', 'student_mdl', TRUE);
		$this->load->model('notification_model', 'notif_mdl', TRUE);
		$this->load->model('announcement_model', 'ann_mdl', TRUE);
		$this->load->model('admin_account_model', 'admin_acct_mdl', TRUE);
    }
	
	function index(){
		header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
		header('Cache-Control: no-store, no-cache, must-revalidate');
		header('Cache-Control: post-check=0, pre-check=0', FALSE);
		header('Pragma: no-cache');
		
		$session_data = $this->session->userdata('logged_in');
		
		//DATA
		$data['username'] = $session_data['username'];
		$data['role'] = $session_data['role'];
		
		$this->load->view($session_data['role'].'/'.$session_data['role'].'_logged_in_view', $data);
	}
	
	public function update_records()
	{
		//upload file here
		$config['upload_path'] = './csv/';
		$config['allowed_types'] = 'csv';
		$config['max_size']	= '5000';
		
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload())
		{
			echo $this->upload->display_errors();
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
		}
		
		//read record
		$this->read_record();
		//update changelog
		
		redirect('Admin_control', 'refresh');
		
	}	
	
	function read_record()
	{
		//code for reading records
	}
	
	/*
	*	ANNOUNCEMENT related FUNCTIONS
	*/
	public function get_announcements()
	{
		$data['announcements'] = $this->ann_mdl->get_all();
		$this->load->view('admin/search_results_announcement', $data);
	}
	
	public function add_announcement()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[6]|max_length[20]|is_unique[announcement.title]');
		$this->form_validation->set_rules('details', 'Details', 'trim|required|min_length[6]|max_length[300]');
		//$this->form_validation->set_rules('date', 'Date', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			redirect('Admin_control', 'refresh');
		}
		else
		{
			$this->ann_mdl->insert_entry(
						$this->input->post('title'),
						$this->input->post('details')
						);
						
			$this->file_upload();
			redirect('Admin_control', 'refresh');
		}
	}
	
	public function edit_announcement()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[6]|max_length[20]|callback_checkExist');
		$this->form_validation->set_rules('details', 'Details', 'trim|required|min_length[6]|max_length[300]');
		
		$this->form_validation->set_message('checkExist', "{field} already exist.");
		
		if ($this->form_validation->run() == FALSE)
		{
			redirect('Admin_control', 'refresh');
		}
		else
		{
			$this->ann_mdl->update_entry(
						$this->input->post('id'),
						$this->input->post('title'),
						$this->input->post('details')
						);
			$this->file_upload();
			redirect('Admin_control', 'refresh');
		}
	}
	
	function checkExist()
	{
		return $this->ann_mdl->checkExistExcept(
									$this->input->post('title'),
									$this->input->post('id')
									);
	}
	
	public function del_announcement()
	{	
		$this->ann_mdl->remove_entry(
						$this->input->post('id')
					);
		
		redirect('Admin_control', 'refresh');
	}
	
	public function file_upload()
	 {
		
		$fileCount = sizeof($_FILES['userfile']['tmp_name']);
		$files = $_FILES['userfile'];
	 
		// first make sure that there is no error in uploading the files
		for($i=0;$i<$fileCount;$i++)
		{
		  if($_FILES['userfile']['error'][$i] != 0)
		  {
		   $this->form_validation->set_message('file_upload', 'Couldn\'t upload the file(s)');
			return FALSE;
		  }
		}
		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|png|pdf|doc|docx|ppt|pptx';
		$this->load->library('upload', $config);
		
		for ($i = 0; $i < $fileCount; $i++)
		{
			  $_FILES['userfile']['name'] = $files['name'][$i];
			  $_FILES['userfile']['type'] = $files['type'][$i];
			  $_FILES['userfile']['tmp_name'] = $files['tmp_name'][$i];
			  $_FILES['userfile']['size'] = $files['size'][$i];
	
		  $this->upload->initialize($config);
		  if ($this->upload->do_upload('userfile'))
		  {
			$udata = array('upload_data' => $this->upload->data());
			
			$data = array(
								'file_name' => $udata['upload_data']['file_name']
						 );
			
			$this->db->insert("upload", $data);
		  }
		  else
		  {
			$this->form_validation->set_message('file_upload', $this->upload->display_errors());
			//echo $this->upload->display_errors;
			return FALSE;
		  }
		}
		return TRUE;
	  }
	  
	/*
	*	ACCOUNT GENERATION related FUNCTIONS
	*/
	function generateUsername(){
		/*
		$data['username'] = filter_var($_POST['generate_username'], FILTER_SANITIZE_STRING);
		$data['passencrypted'] = md5($this->generateRandomString(20));
		$data['role'] = 'adviser';
		$result = $this->admin_acct_mdl->insert_admin($data);
		redirect('Admin_control', 'refresh');
		*/
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
    
	/*
	*	STUDENT TAB related FUNCTIONS
	*/
	public function get_students()
	{
		$data['search_param'] = null;
		$data['students'] = $this->student_mdl->get_all();
		$this->load->view('admin/search_results_student', $data);
	}
	
	function search_student(){
		$srch_param = $this->input->post('srch_param');
		
		$data['search_param'] = $srch_param;
		$data['students'] = $this->student_mdl->get_by_name($srch_param);
		$this->load->view('admin/search_results_student', $data);
	}
	
	/*
	*	ADVISER TAB related FUNCTIONS
	*/
	public function get_advisers()
	{
		$data['search_param'] = null;
		$data['advisers'] = $this->adviser_mdl->get_all();
		$this->load->view('admin/search_results_adviser', $data);
	}
	
	function search_adviser(){
		$srch_param = $this->input->post('srch_param');
		
		$data['search_param'] = $srch_param;
		$data['advisers'] = $this->adviser_mdl->get_by_name($srch_param);
		$this->load->view('admin/search_results_adviser', $data);
	}
	
}
/* End of file verify_login.php */
/* Location: ./application/controllers/verify_login.php */