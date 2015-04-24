<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Notifications_control extends CI_Controller {
    function __construct() {
        parent::__construct();
		$this->load->model('notification_model', 'notif_mdl', TRUE);
    }
	
	function index(){
		$id = $this->input->post('user_id');
		
		$data['notifications'] = $this->notif_mdl->get_all_by($id);
		$this->load->view('header_notifs', $data);
	}
    //
}
/* End of file verify_login.php */
/* Location: ./application/controllers/verify_login.php */