<?php
	class Uform_model extends CI_model{
		//Load the Database
		public function __construct() {
			$this->load->database();
		}

		// Registers a User
		public function ugraduate_form($dateofbirth){
			// User data array 
			$data = array(
				'user_id' => $this->input->post('user_id') ,
				'sname' => $this->input->post('sname') ,
				'fname' => $this->input->post('fname') ,
				'lname' => $this->input->post('lname') ,
				'pname' => $this->input->post('pname') ,
				'maiden' => $this->input->post('maiden') ,
				'dob' => $dateofbirth,
				'gender' => $this->input->post('gender') ,
				'phone' => $this->input->post('phoneno') ,
				'resident' => $this->input->post('resident'),
				'country' => $this->input->post('country') ,
				'address' => $this->input->post('address') ,
				'major' => $this->input->post('major'),
				'sch_name' => $this->input->post('schname') ,
				'sch_address' => $this->input->post('schaddress') ,
				'date_attend' => $this->input->post('dateattend'),
				'date_grad' => $this->input->post('dategrad') ,
				'prep_name' => $this->input->post('prepname') ,
				'prep_address' => $this->input->post('prepaddress'),				
				'prep_date' => $this->input->post('dateattendyear_1') ,
				'prep_grad' => $this->input->post('dategradyear_1') ,
				'cert_1' => $this->input->post('cert_1'),
				'cert_year_1' => $this->input->post('cert_date_1') ,
				'cert_2' => $this->input->post('cert_2') ,
				'cert_year_2' => $this->input->post('cert_date_2'),
				'father_name' => $this->input->post('father_n') ,
				'mother_name' => $this->input->post('mother_n') ,
				'father_job' => $this->input->post('father_o'),
				'mother_job' => $this->input->post('mother_o') ,
				'father_phone' => $this->input->post('father_phone') ,
				'mother_phone' => $this->input->post('mother_phone'),
				'father_mail' => $this->input->post('father_email') ,
				'mother_mail' => $this->input->post('mother_email') ,
				'father_degree' => $this->input->post('father_degree'),
				'mother_degree' => $this->input->post('mother_degree') ,
				'father_degree_year' => $this->input->post('father_degree_year') ,
				'mother_degree_year' => $this->input->post('mother_degree_year'),
				'parent_status' => $this->input->post('parent_status') ,
				'parent_status_details' => $this->input->post('parent_status_note') ,
				'siblings_name' => $this->input->post('siname') ,
				'siblings_age' => $this->input->post('siage'),
				'sibling_college' => $this->input->post('sicollege') ,
				'sibling_college_grad' => $this->input->post('ygrad') ,
				'siblings_name_2' => $this->input->post('siname_2'),
				'siblings_age_2' => $this->input->post('siage_2') ,
				'sibling_college_2' => $this->input->post('sicollege_2') ,
				'sibling_college_grad_2' => $this->input->post('ygrad_2'),
				'relative_name' => $this->input->post('rename') ,
				'date_attend_1' => $this->input->post('redate') ,
				'school_attend' => $this->input->post('school_attend'),
				'relative_name' => $this->input->post('relation'),
				'lang' => $this->input->post('lang') ,
				'citizen' => $this->input->post('cocitizen') ,
				'country_dob' => $this->input->post('cobirth'),
				'source' => $this->input->post('source') ,
				'ques_resident' => $this->input->post('bresident') ,
				'ques_creditials' => $this->input->post('nationalid'),
				'expulsion' => $this->input->post('expelled') ,
				'crime' => $this->input->post('drug')

				 );

			// Insert user
			return $this->db->insert('ugraduate', $data);
		}

		// Transfer application form
		public function transfer_form($dateofbirth){
			// User data array 
			$data = array(
				'user_id' => $this->input->post('user_id') ,
				'sname' => $this->input->post('sname') ,
				'fname' => $this->input->post('fname') ,
				'lname' => $this->input->post('lname') ,
				'pname' => $this->input->post('pname') ,
				'maiden' => $this->input->post('maiden') ,
				'dob' => $dateofbirth,
				'gender' => $this->input->post('gender') ,
				'phone' => $this->input->post('phoneno') ,
				'resident' => $this->input->post('resident'),
				'country' => $this->input->post('country') ,
				'address' => $this->input->post('address') ,
				'major' => $this->input->post('major'),
				'sch_name' => $this->input->post('schname') ,
				'sch_address' => $this->input->post('schaddress') ,
				'date_attend' => $this->input->post('dateattend'),
				'date_grad' => $this->input->post('dategrad') ,
				'prep_name' => $this->input->post('prepname') ,
				'prep_address' => $this->input->post('prepaddress'),				
				'prep_date' => $this->input->post('dateattendyear_1') ,
				'prep_grad' => $this->input->post('dategradyear_1') ,
				'uni_name' => $this->input->post('uniname') ,
				'uni_address' => $this->input->post('uniaddress'),				
				'uni_date' => $this->input->post('uniattendyear') ,
				'uni_grad' => $this->input->post('unigradyear') ,
				'plevel' => $this->input->post('plevel') ,
				'cert_1' => $this->input->post('cert_1'),
				'cert_year_1' => $this->input->post('cert_date_1') ,
				'cert_2' => $this->input->post('cert_2') ,
				'cert_year_2' => $this->input->post('cert_date_2'),
				'father_name' => $this->input->post('father_n') ,
				'mother_name' => $this->input->post('mother_n') ,
				'father_job' => $this->input->post('father_o'),
				'mother_job' => $this->input->post('mother_o') ,
				'father_phone' => $this->input->post('father_phone') ,
				'mother_phone' => $this->input->post('mother_phone'),
				'father_mail' => $this->input->post('father_email') ,
				'mother_mail' => $this->input->post('mother_email') ,
				'father_degree' => $this->input->post('father_degree'),
				'mother_degree' => $this->input->post('mother_degree') ,
				'father_degree_year' => $this->input->post('father_degree_year') ,
				'mother_degree_year' => $this->input->post('mother_degree_year'),
				'parent_status' => $this->input->post('parent_status') ,
				'parent_status_details' => $this->input->post('parent_status_note') ,
				'siblings_name' => $this->input->post('siname') ,
				'siblings_age' => $this->input->post('siage'),
				'sibling_college' => $this->input->post('sicollege') ,
				'sibling_college_grad' => $this->input->post('ygrad') ,
				'siblings_name_2' => $this->input->post('siname_2'),
				'siblings_age_2' => $this->input->post('siage_2') ,
				'sibling_college_2' => $this->input->post('sicollege_2') ,
				'sibling_college_grad_2' => $this->input->post('ygrad_2'),
				'relative_name' => $this->input->post('rename') ,
				'date_attend_1' => $this->input->post('redate') ,
				'school_attend' => $this->input->post('school_attend'),
				'relative_name' => $this->input->post('relation'),
				'lang' => $this->input->post('lang') ,
				'citizen' => $this->input->post('cocitizen') ,
				'country_dob' => $this->input->post('cobirth'),
				'source' => $this->input->post('source') ,
				'ques_resident' => $this->input->post('bresident') ,
				'ques_creditials' => $this->input->post('nationalid'),
				'expulsion' => $this->input->post('expelled') ,
				'crime' => $this->input->post('drug')

				 );

			// Insert user
			return $this->db->insert('transfer', $data);
		}

		// public function print_form($user_id) {

		// 	$condition = "user_id =" . "'" . $user_id . "'";
		// 	$this->db->select('*');
		// 	$this->db->from('ugraduate');
		// 	$this->db->where($condition);
		// 	$this->db->limit(1);
		// 	$query = $this->db->get();

		// 	if ($query->num_rows() == 1) {
			
		// 	return $query->result();
			
		// 	} else {

		// 	return false;
			
		// 	}
		// }

		public function get_form($user_id) {

			$query = $this->db->get_where('ugraduate', array('user_id' => $user_id));
			return $query->row_array();

		}

		public function get_transfer($user_id) {

			$query = $this->db->get_where('transfer', array('user_id' => $user_id));
			return $query->row_array();

		}	
	}

?>