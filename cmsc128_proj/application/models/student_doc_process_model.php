<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Student_doc_process_model extends CI_Model {
	function __construct() {
		parent::__construct(); 
	}
	
	public function updateDocumentTable($doc_id, $transactionType, $studentNumber, $crs_no1, $crs_title1, $crs_no2,
									   $crs_title2, $crs_no3, $crs_title3, $newcrs_no1, $newcrs_no2, $newcrs_no3,
									   $newcrs_title1, $newcrs_title2, $newcrs_title3, $sem1, $sem2, $sem3, $justification) {
		
					$this->db->query("INSERT INTO document( doc_id, transaction_type, student_number, crs_no1, crs_title1, crs_no2, crs_title2, crs_no3, crs_title3,
										newcrs_no1, newcrs_no2, newcrs_no3, newcrs_title1, newcrs_title2, newcrs_title3, dateTaken1, dateTaken2, dateTaken3,
										justification) VALUES (nextval('document_doc_id_seq'::regclass), '$transactionType', '$studentNumber', '$crs_no1', '$crs_title1',
										'$crs_no2', '$crs_title2','$crs_no3', '$crs_title3', '$newcrs_no1', '$newcrs_no2', '$newcrs_no3', '$newcrs_title1', 
										'$newcrs_title2', '$newcrs_title3', '$sem1', '$sem2', '$sem3', '$justification')");
										
					redirect('student_control', 'refresh');
	}
}

