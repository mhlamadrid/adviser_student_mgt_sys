<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Student_model extends CI_model{
		function studentShowNotifs(){

			$session_data = $this->session->userdata('logged_in');
        	$getId= $session_data['username'];
			//$getId = '2012-12345';
			$query = $this->db->query("SELECT * FROM notification WHERE receiver_id = '$getId'");
			if ($query->num_rows() != 0) {
				$data['msgs'] = $query->result();
			}
			else{
				$data['msgs'] = NULL;
			}

			return $data;
		}

		function approveRequest($msg_id){
			$this->db->query("DELETE FROM notification WHERE notif_id = '$msg_id';");
		}

		function rejectRequest($msg_id){
			$this->db->query("DELETE FROM notification WHERE notif_id = '$msg_id';");
		}
	}
?>