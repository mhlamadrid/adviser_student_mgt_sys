<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Adviser_model extends CI_model{
		
		function requestInfo(){
			$session_data = $this->session->userdata('logged_in');
        	$getId= $session_data['username'];
        	
			$query = $this->db->query("SELECT * FROM adviser WHERE id = '$getId';");
			$adviserId = $query->result();
			foreach ($query->result() as $row) {
				$adviserId = $row->id;
			}
			//return $adviserId;
			$query1 = $this->db->query("SELECT * FROM student_adviser WHERE emp_id = '$adviserId';");
			$studentId = $query1->result();
			foreach ($query1->result() as $row) {
				$studentId = $row->stud_no;
			}
			//return $studentId;
			$query2 = $this->db->query(
				"INSERT INTO notification(
		        notif_id, notif_body, sender_id, receiver_id)
		    	VALUES (nextval('notification_notif_id_seq'::regclass), 'Your adviser request for your contact info', '$adviserId', '$studentId');"
			);			
		}
	}
?>