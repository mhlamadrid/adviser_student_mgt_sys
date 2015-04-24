<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Notification_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_latest_entries($n)
        {
                $query = $this->db->get('notification', $n);
                return $query->result();
        }
		
		public function get_all()
        {
                $query = $this->db->get('notification');
                return $query->result();
        }
		
		public function get_all_by($receiver_id)
        {
				//gets all notifications to the current user
				$this -> db -> from('notification');
				$this -> db -> where('receiver_id', $receiver_id);
                $query = $this -> db -> get();
                return $query->result();
        }

        public function insert_entry($date, $title, $body)
        {
				$data = array(
						'date' => $date,
						'body' => $body,
						'title' => $title
				);
				
                $this->db->insert("notification", $data);
        }

        public function update_entry($id, $date, $title, $body)
        {
				$data = array(
						'date' => $date,
						'body' => $body,
						'title' => $title,
				);
				
				$this->db->where('id', $id);
				$this->db->update('notification', $data);
        }
		
		public function checkExistExcept($title, $id)
		{
			$this -> db -> select('id, title');
			$this -> db -> from('notification');
			$this -> db -> where('id !=', $id);
			$this -> db -> where('title', $title);
			$this -> db -> limit(1);
			$query = $this -> db -> get();

			if($query -> num_rows() == 1) {
				return false;
			}
			else{
				return true;
			}
		}
		
		public function remove_entry($id)
        {
				$this->db->where('id', $id);
				$this->db->delete('notification');
        }

}