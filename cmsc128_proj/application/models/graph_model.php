<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Graph_model extends CI_Model
	{
		function __construct ()
		{
			parent:: __construct();
			$this->load->database();
		}

		public function student_info ()
		{

			$query = $this->db->query("SELECT * FROM student WHERE classification LIKE 'Freshman'");
			$data['ftotal'] = $query->num_rows();
			// $data['ftotal'] = $this->db->affected_rows();
			
			$query = $this->db->query("SELECT * FROM student WHERE classification LIKE 'Freshman' AND status LIKE 'good'");
			$data['fgood'] = $query->num_rows();
			// $data['fgood'] = $this->db->affected_rows();

			$query = $this->db->query("SELECT * FROM student WHERE classification LIKE 'Freshman' AND status LIKE 'probation'");
			$data['fprobation'] = $query->num_rows();
			// $data['fprobation'] = $this->db->affected_rows();

			$query = $this->db->query("SELECT * FROM student WHERE classification LIKE 'Freshman' AND status LIKE 'dismissed'");
			$data['fdismissed'] = $query->num_rows();
			// $data['fdismissed'] = $this->db->affected_rows();

			$query = $this->db->query("SELECT * FROM student WHERE classification LIKE 'Sophomore'");
			$data['stotal'] = $query->num_rows();
			// $data['stotal'] = $this->db->affected_rows();
			
			$query = $this->db->query("SELECT * FROM student WHERE classification LIKE 'Sophomore' AND status LIKE 'good'");
			$data['sgood'] = $query->num_rows();
			// $data['sgood'] = $this->db->affected_rows();

			$query = $this->db->query("SELECT * FROM student WHERE classification LIKE 'Sophomore' AND status LIKE 'probation'");
			$data['sprobation'] = $query->num_rows();
			// $data['sprobation'] = $this->db->affected_rows();

			$query = $this->db->query("SELECT * FROM student WHERE classification LIKE 'Sophomore' AND status LIKE 'dismissed'");
			$data['sdismissed'] = $query->num_rows();
			// $data['sdismissed'] = $this->db->affected_rows();

			$query = $this->db->query("SELECT * FROM student WHERE classification LIKE 'Junior'");
			$data['jtotal'] = $query->num_rows();
			// $data['jtotal'] = $this->db->affected_rows();
			
			$query = $this->db->query("SELECT * FROM student WHERE classification LIKE 'Junior' AND status LIKE 'good'");
			$data['jgood'] = $query->num_rows();
			// $data['jgood'] = $this->db->affected_rows();

			$query = $this->db->query("SELECT * FROM student WHERE classification LIKE 'Junior' AND status LIKE 'probation'");
			$data['jprobation'] = $query->num_rows();
			// $data['jprobation'] = $this->db->affected_rows();

			$query = $this->db->query("SELECT * FROM student WHERE classification LIKE 'Junior' AND status LIKE 'dismissed'");
			$data['jdismissed'] = $query->num_rows();
			// $data['jdismissed'] = $this->db->affected_rows();

			$query = $this->db->query("SELECT * FROM student WHERE classification LIKE 'Senior'");
			$data['srtotal'] = $query->num_rows();
			// $data['srtotal'] = $this->db->affected_rows();
			
			$query = $this->db->query("SELECT * FROM student WHERE classification LIKE 'Senior' AND status LIKE 'good'");
			$data['srgood'] = $query->num_rows();
			// $data['srgood'] = $this->db->affected_rows();

			$query = $this->db->query("SELECT * FROM student WHERE classification LIKE 'Senior' AND status LIKE 'probation'");
			$data['srprobation'] = $query->num_rows();
			// $data['srprobation'] = $this->db->affected_rows();

			$query = $this->db->query("SELECT * FROM student WHERE classification LIKE 'Senior' AND status LIKE 'dismissed'");
			$data['srdismissed'] = $query->num_rows();
			// $data['srdismissed'] = $this->db->affected_rows();

			return $data;
		}
	}

?>