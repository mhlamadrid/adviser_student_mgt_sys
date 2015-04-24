<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
  
class Filtered_search_adviser_model extends CI_Model {
 
    function __construct() {
        parent::__construct();
    }
	
	/*
	* FUNCTIONS FOR SEARCHING ADVISERS
	*/
	
	//sorted alphabetically
	public function get_all()
	{
		$query = $this->db->get('adviser');
		return $query->result();
	}
	//sorted by number of graduates
	public function get_all_by_num_of_grads()
	{
	
	}
	
	public function get_by_name($adviser_name)
	{
		$query = $this->db->query("SELECT * FROM adviser WHERE name LIKE '%$adviser_name%'");
		return $query->result();
	}
}
  
/* End of file admin_login_model.php */
/* Location: ./application/models/admin_login_model.php */