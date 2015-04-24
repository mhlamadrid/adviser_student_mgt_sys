<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Appointment_model extends CI_model{
		
		public function requestAppointment($student_no, $data){
			$agenda = $data['agenda'];
			$time = $data['time'];
			$date = $data['date'];
			
			$query1 = $this->db->query("INSERT INTO appointment 
				VALUES ( '$student_no', (SELECT emp_id from student_adviser where stud_no = '$student_no'), 
				(SELECT current_date), '$date', '$time', '$agenda', 'pending', 
				nextval('appointment_id_seq'::regclass));"
				);

			$query2 = $this->db->query(
				"INSERT INTO notification(
		        notif_id, notif_body, receiver_id, sender_id, category)
		    	VALUES (nextval('notification_notif_id_seq'::regclass), 'One of your advisees requested for an appointment', '$student_no', (SELECT emp_id from student_adviser where stud_no = '$student_no'), 'appointment');"
				);
			return null;
		}
	}