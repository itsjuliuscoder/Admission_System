<?php
	class Uform extends CI_Controller {

		public function form($page = 'form') {
			// Check if User is Login
			if (!$this->session->userdata('logged_in')) {
				redirect('admission_portal/login');
			}
			if (!file_exists(APPPATH.'views/admission_portal/user/'.$page.'.php')) {
					show_404();
			}

			$data['page_title'] = 'Apply for Undergraduate Studies | HNAUB Admission Portal';

				$this->load->view('admission_portal/parts/header', $data);
				$this->load->view('admission_portal/user/'.$page ,$data);
				$this->load->view('admission_portal/parts/footer');			

			
		}

		public function ugraduate() {

			// Check if User is Login
			if (!$this->session->userdata('logged_in')) {
				redirect('admission_portal/login');
			}

			$this->form_validation->set_rules('user_id', 'id');
			$this->form_validation->set_rules('sname', 'Surname');
			$this->form_validation->set_rules('fname', 'First Name');
			$this->form_validation->set_rules('lname', 'Last Name');
			$this->form_validation->set_rules('mname', 'Middle Name');
			$this->form_validation->set_rules('pname', 'Preferred Name');
			$this->form_validation->set_rules('maiden', 'Maiden Name');
			$this->form_validation->set_rules('dob_no', 'Date', 'required');
			$this->form_validation->set_rules('month', 'Month', 'required');
			$this->form_validation->set_rules('year', 'year', 'required');
			$this->form_validation->set_rules('gender', 'Gender');
			$this->form_validation->set_rules('phoneno', 'Phone Number');
			$this->form_validation->set_rules('resident', 'Resident');
			$this->form_validation->set_rules('country', 'Select Country' );
			$this->form_validation->set_rules('address', 'Home Address');
			$this->form_validation->set_rules('major', 'Select Major & Option' );
			$this->form_validation->set_rules('schname', 'School\'s Name ');
			$this->form_validation->set_rules('schaddress', 'School\'s Address' );
			$this->form_validation->set_rules('dateattend', 'Date Attended');
			$this->form_validation->set_rules('dategrad', 'Date of Graduation' );
			$this->form_validation->set_rules('prepname', 'School Name' );
			$this->form_validation->set_rules('prepaddress', 'Confirm Password' );
			$this->form_validation->set_rules('dateattendyear_1', 'Date Attended' );
			$this->form_validation->set_rules('dategradyear_1', 'Date of Graduation' );
			$this->form_validation->set_rules('cert_1', 'Certificate 1' );
			$this->form_validation->set_rules('cert_date_1', 'Date Taken');
			$this->form_validation->set_rules('cert_2', 'Certificate 2');
			$this->form_validation->set_rules('cert_date_2', 'Date Taken');
			$this->form_validation->set_rules('father_n', 'Father\'s Name');
			$this->form_validation->set_rules('mother_n', 'Mother\'s Name');
			$this->form_validation->set_rules('father_o', 'Father\'s Occupation');
			$this->form_validation->set_rules('mother_o', 'Father\'s Occupation');
			$this->form_validation->set_rules('father_phone', 'Father\'s Phone number');
			$this->form_validation->set_rules('mother_phone', 'Mother\'s Phone number');
			$this->form_validation->set_rules('father_email', 'Father\'s Email Address');
			$this->form_validation->set_rules('mother_email', 'Mother\'s Email Address');
			$this->form_validation->set_rules('father_degree', 'Father\'s Degree');
			$this->form_validation->set_rules('mother_degree', 'Mother\'s Degree');
			$this->form_validation->set_rules('father_degree_year', 'Father\'s Degree');
			$this->form_validation->set_rules('mother_degree_year', 'Mother\'s Degree');
			$this->form_validation->set_rules('parent_status', 'Select Parents Status');
			$this->form_validation->set_rules('parent_status_note', 'Parents Status Note');
			$this->form_validation->set_rules('siname', 'Sibling\'s Name');
			$this->form_validation->set_rules('siage', 'Sibling\'s Age');
			$this->form_validation->set_rules('sicollege', 'Sibling\'s College');
			$this->form_validation->set_rules('ygrad', 'Sibling\'s Year of Graduation');
			$this->form_validation->set_rules('siname_2', 'Sibling\'s Name');
			$this->form_validation->set_rules('siage_2', 'Sibling\'s Age');
			$this->form_validation->set_rules('sicollege_2', 'Sibling\'s College');
			$this->form_validation->set_rules('ygrad_2', 'Sibling\'s Year of Graduation');
			$this->form_validation->set_rules('rename', 'Relative\'s Name');
			$this->form_validation->set_rules('redate', 'Date of Attendance');
			$this->form_validation->set_rules('school_attend', 'School Attended');
			$this->form_validation->set_rules('relation', 'Relation to You');
			$this->form_validation->set_rules('lang', 'Language Spoken at Home');
			$this->form_validation->set_rules('cocitizen', 'Country of Citizenship');
			$this->form_validation->set_rules('cobirth', 'Country of Birth');
			$this->form_validation->set_rules('source', 'Source');
			$this->form_validation->set_rules('bresident', 'Benin Resident');
			$this->form_validation->set_rules('nationalid', 'National ID card');
			$this->form_validation->set_rules('expelled', 'Expelled');
			$this->form_validation->set_rules('drug', 'Arrested for Drug');
				

			if ($this->form_validation->run() === FALSE) {

				$data['page_title'] = "Apply for Undergraduate Studies | HNAUB Admission Portal";

				$data['title'] = "Apply for Undergraduate Studies";

				$this->load->view('admission_portal/templates/header_form', $data);
				$this->load->view('admission_portal/user/apply/ugraduate_1', $data);
				$this->load->view('admission_portal/templates/footer_form');
			} else {
				//die('Continue');

				//$gender = ($this->input->post('gender'));

				$dob = ($this->input->post('dob_no'));

				$dob_mon = ($this->input->post('month'));

				$dob_year = ($this->input->post('year'));
				
				$dateofbirth = $dob . " " . $dob_mon . " " . $dob_year;

				//var_dump($dateofbirth);

				//echo "<br/>";

				//var_dump($gender);
				
				$this->uform_model->ugraduate_form($dateofbirth);

				//$this->session->set_flashdata('user_registered', 'You are now registered and can log in');

				redirect('admission_portal/user/apply/print_form');
			}
			
		}
		// public function transfer() {

		// 	// Check if User is Login
		// 	if (!$this->session->userdata('logged_in')) {
		// 		redirect('admission_portal/login');
		// 	}

		// 	$data['page_title'] = "Log In | HNAUB Admission Portal";
			
		// 	$this->form_validation->set_rules('user_id', 'id');	
		// 	$this->form_validation->set_rules('sname', 'Surname', 'required');
		// 	$this->form_validation->set_rules('fname', 'First Name', 'required');				

		// 	if ($this->form_validation->run() === FALSE) {

		// 		$data['page_title'] = "Apply as a Transfer Student | HNAUB Admission Portal";

		// 		//$data['title'] = "Apply as a Transfer Student";

		// 		$this->load->view('admission_portal/templates/header_form', $data);
		// 		$this->load->view('admission_portal/user/apply/transfer_1', $data);
		// 		$this->load->view('admission_portal/templates/footer_form');
		// 	} else {
		// 		//die('Continue');
					
		// 		$sname = $this->input->post('sname');
		// 		$fname = $this->input->post('fname');
		// 		$user_id = $this->input->post('user_id');

		// 		$result = $this->uform_model->transfer_form($sname, $fname, $user_id);

		// 		 if ($result != false) {
		// 		 	redirect('admission_portal/user/apply/print_form');
		// 		 }
		// 		 else {
		// 		 	echo "Form fail to submit";
		// 		 }

		// 		//$this->session->set_flashdata('user_registered', 'You are now registered and can log in');

		// 		//redirect('admission_portal/user');
		// 	}

			
		// }

		public function transfer() {

			// Check if User is Login
			if (!$this->session->userdata('logged_in')) {
				redirect('admission_portal/login');
			}

				$this->form_validation->set_rules('user_id', 'id');
				$this->form_validation->set_rules('sname', 'Surname');
				$this->form_validation->set_rules('fname', 'First Name');
				$this->form_validation->set_rules('lname', 'Last Name');
				$this->form_validation->set_rules('mname', 'Middle Name');
				$this->form_validation->set_rules('pname', 'Preferred Name');
				$this->form_validation->set_rules('maiden', 'Maiden Name');
				$this->form_validation->set_rules('dob_no', 'Date', 'required');
				$this->form_validation->set_rules('month', 'Month', 'required');
				$this->form_validation->set_rules('year', 'year', 'required');
				$this->form_validation->set_rules('gender', 'Gender');
				$this->form_validation->set_rules('phoneno', 'Phone Number');
				$this->form_validation->set_rules('resident', 'Resident');
				$this->form_validation->set_rules('country', 'Select Country' );
				$this->form_validation->set_rules('address', 'Home Address');
				$this->form_validation->set_rules('major', 'Select Major & Option' );
				$this->form_validation->set_rules('schname', 'School\'s Name ');
				$this->form_validation->set_rules('schaddress', 'School\'s Address' );
				$this->form_validation->set_rules('dateattend', 'Date Attended');
				$this->form_validation->set_rules('dategrad', 'Date of Graduation' );
				$this->form_validation->set_rules('prepname', 'School Name' );
				$this->form_validation->set_rules('prepaddress', 'School Address' );
				$this->form_validation->set_rules('dateattendyear_1', 'Date Attended' );
				$this->form_validation->set_rules('dategradyear_1', 'Date of Graduation' );
				$this->form_validation->set_rules('uniname', 'School Name' );
				$this->form_validation->set_rules('uniaddress', 'School Address' );
				$this->form_validation->set_rules('uniattendyear', 'Date Attended' );
				$this->form_validation->set_rules('unigradyear', 'Date of Graduation' );
				$this->form_validation->set_rules('plevel', 'Present Level' );
				$this->form_validation->set_rules('cert_1', 'Certificate 1' );
				$this->form_validation->set_rules('cert_date_1', 'Date Taken');
				$this->form_validation->set_rules('cert_2', 'Certificate 2');
				$this->form_validation->set_rules('cert_date_2', 'Date Taken');
				$this->form_validation->set_rules('father_n', 'Father\'s Name');
				$this->form_validation->set_rules('mother_n', 'Mother\'s Name');
				$this->form_validation->set_rules('father_o', 'Father\'s Occupation');
				$this->form_validation->set_rules('mother_o', 'Father\'s Occupation');
				$this->form_validation->set_rules('father_phone', 'Father\'s Phone number');
				$this->form_validation->set_rules('mother_phone', 'Mother\'s Phone number');
				$this->form_validation->set_rules('father_email', 'Father\'s Email Address');
				$this->form_validation->set_rules('mother_email', 'Mother\'s Email Address');
				$this->form_validation->set_rules('father_degree', 'Father\'s Degree');
				$this->form_validation->set_rules('mother_degree', 'Mother\'s Degree');
				$this->form_validation->set_rules('father_degree_year', 'Father\'s Degree');
				$this->form_validation->set_rules('mother_degree_year', 'Mother\'s Degree');
				$this->form_validation->set_rules('parent_status', 'Select Parents Status');
				$this->form_validation->set_rules('parent_status_note', 'Parents Status Note');
				$this->form_validation->set_rules('siname', 'Sibling\'s Name');
				$this->form_validation->set_rules('siage', 'Sibling\'s Age');
				$this->form_validation->set_rules('sicollege', 'Sibling\'s College');
				$this->form_validation->set_rules('ygrad', 'Sibling\'s Year of Graduation');
				$this->form_validation->set_rules('siname_2', 'Sibling\'s Name');
				$this->form_validation->set_rules('siage_2', 'Sibling\'s Age');
				$this->form_validation->set_rules('sicollege_2', 'Sibling\'s College');
				$this->form_validation->set_rules('ygrad_2', 'Sibling\'s Year of Graduation');
				$this->form_validation->set_rules('rename', 'Relative\'s Name');
				$this->form_validation->set_rules('redate', 'Date of Attendance');
				$this->form_validation->set_rules('school_attend', 'School Attended');
				$this->form_validation->set_rules('relation', 'Relation to You');
				$this->form_validation->set_rules('lang', 'Language Spoken at Home');
				$this->form_validation->set_rules('cocitizen', 'Country of Citizenship');
				$this->form_validation->set_rules('cobirth', 'Country of Birth');
				$this->form_validation->set_rules('source', 'Source');
				$this->form_validation->set_rules('bresident', 'Benin Resident');
				$this->form_validation->set_rules('nationalid', 'National ID card');
				$this->form_validation->set_rules('expelled', 'Expelled');
				$this->form_validation->set_rules('drug', 'Arrested for Drug');
				

			if ($this->form_validation->run() === FALSE) {

				$data['page_title'] = "Apply as a Transfer Student | HNAUB Admission Portal";

				$data['title'] = "Apply as a Transfer Student";

				$this->load->view('admission_portal/templates/header_form', $data);
				$this->load->view('admission_portal/user/apply/transfer_1', $data);
				$this->load->view('admission_portal/templates/footer_form');
			} else {
				//die('Continue');

				//$gender = ($this->input->post('gender'));

				$dob = ($this->input->post('dob_no'));

				$dob_mon = ($this->input->post('month'));

				$dob_year = ($this->input->post('year'));
				
				$dateofbirth = $dob . " " . $dob_mon . " " . $dob_year;

				//var_dump($dateofbirth);

				//echo "<br/>";

				//var_dump($gender);
				
				$this->uform_model->transfer_form($dateofbirth);

				//$this->session->set_flashdata('user_registered', 'You are now registered and can log in');

				redirect('admission_portal/user/apply/pform_transfer');
			}
			
		}

		public function pform_ugraduate() {
			// Check if User is Login
			if (!$this->session->userdata('logged_in')) {
				redirect('admission_portal/login');
			}

			// if (!file_exists(APPPATH.'views/admission_portal/user/apply'.$page.'.php')) {
			// 		show_404();
			// }

			 $user_id = ($this->session->userdata('id'));


			$data['form'] = $this->uform_model->get_form($user_id);

			//var_dump($result);

			

			$data['page_title'] = 'Undergraduate Admission Form  | HNAUB Admission Portal';

				$this->load->view('admission_portal/templates/header_form', $data);
				$this->load->view('admission_portal/user/apply/print_form', $data);
				$this->load->view('admission_portal/templates/footer_form');

			
		}

		public function pform_transfer() {
			// Check if User is Login
			if (!$this->session->userdata('logged_in')) {
				redirect('admission_portal/login');
			}

			// if (!file_exists(APPPATH.'views/admission_portal/user/apply'.$page.'.php')) {
			// 		show_404();
			// }

			 $user_id = ($this->session->userdata('id'));


			$data['form'] = $this->uform_model->get_transfer($user_id);

			//var_dump($result);

			

			$data['page_title'] = 'Transfer Admission Form  | HNAUB Admission Portal';

				$this->load->view('admission_portal/templates/header_form', $data);
				$this->load->view('admission_portal/user/apply/pform_transfer', $data);
				$this->load->view('admission_portal/templates/footer_form');

			
		}
 
		// Admission form for the transfer students 

	}

?>