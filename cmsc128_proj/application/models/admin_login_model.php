<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
  
class Admin_login_model extends CI_Model {
 
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
    function login($username, $password) {
        //create query to connect user login database
        $this->db->select('username, password, role');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);
         
        //get query and processing
        $query = $this->db->get();
        if($query->num_rows() == 1) { 
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }
	
	public function insert_admin($data){
		$query = $this->db->query("SELECT * FROM admin where username = '{$data['username']}'");
		
		if($query->num_rows() == 0){
			$this->db->query("INSERT INTO admin VALUES (
				'{$data['username']}',
				'{$data['passencrypted']}',
				'{$data['role']}')");
			return true;
		}

		return false;
	}
}
  
/* End of file admin_login_model.php */
/* Location: ./application/models/admin_login_model.php */