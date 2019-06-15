<?php
	class Users extends MX_Controller{


		// Signs up a User
			public function register() {
	 			
	 			// Checks if the User is loggedin
	 			
	 			if ($this->session->userdata('logged_in')) {
					redirect('admission_portal/user');
				}


				$data['page_title'] = 'Sign Up | HNAUB Admission Portal';			



				$this->form_validation->set_rules('fname', 'First Name', 'required');
				$this->form_validation->set_rules('lname', 'Last Name', 'required');
				$this->form_validation->set_rules('email', 'Email', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
					

				if ($this->form_validation->run() === FALSE) {

					$data['page_title'] = "Sign Up | HNAUB Admission Portal";

					$this->load->view('admission_portal/parts/header', $data);
					$this->load->view('admission_portal/register',$data);
					$this->load->view('admission_portal/parts/footer');
				} else {
					// Encryt Password
					$enc_password = sha1($this->input->post('password'));

					$this->user_model->register_user($enc_password);

					$this->session->set_flashdata('user_registered', 'You are now registered and can log in');

					redirect('admission_portal/login');
				}

				
			}

		// Logs in a User
			public function login() {

				// Checks if the User is loggedin
				if ($this->session->userdata('logged_in')) {
					redirect('admission_portal/user');
				}

				$data['page_title'] = "Log In | HNAUB Admission Portal";
				
				$this->form_validation->set_rules('email', 'Email', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');				

				if ($this->form_validation->run() === FALSE) {

					$this->load->view('admission_portal/parts/header', $data);
					$this->load->view('admission_portal/login',$data);
					$this->load->view('admission_portal/parts/footer');
				}

				else {

					$email = $this->input->post('email');

					// Get and encrypt the password 
					$enc_password = sha1($this->input->post('password'));

					//Login user 
					$user_info = $this->user_model->login($email, $enc_password);

					if ($user_info) {

						$sess_array = array(
							'email' => $this->input->post('email') 
						);

						// Create the Session
						$this->session->set_userdata('logged_in', $sess_array);
						$result = $this->user_model->read_user_information($sess_array);
						if ($result != false) {
							$data = array(
								'id' =>$result[0]->id,
								'fname' =>$result[0]->fname,
								'lname' =>$result[0]->lname, 
								'email' =>$result[0]->email,
								//'phone' =>$result[0]->phone,
								//'profile_image'=>$result[0]->profile_image,
								//'position' =>$result[0]->position,
								'password' =>$result[0]->password,
							);

							//$user_info['gender_id'] = $this->user_model->gender_id($id)['name'];

							//var_dump($this->session->set_userdata($data));

							$this->session->set_userdata($data);

							$this->session->set_flashdata('logged_successful', '<b>Welcome</b> to HNAUB Admission Portal, apply for undergraduate studies, as a Fresher or Transfer Student, get Latest Admission News and Details and lot more');

							redirect('admission_portal/user');

							


						}
						// Set Message

					} else {

						$this->session->set_flashdata('login_failed', '<b>Ooops</b> Email or Password seems to be wrong');

						redirect('admission_portal/login');
					}
					
				}
				
			}

		public function logout() {
			// Unset userdata 
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('id');
			$this->session->unset_userdata('fname');
			$this->session->unset_userdata('lname');
			$this->session->unset_userdata('fname');

			$this->session->set_flashdata('user_loggedout', '<b>Yeah!</b> You are now logged out');

			redirect('admission_portal/login');
		}

		// check email
		public function check_email($email){
			$this->load->model('user_model');
			$this->form_validation->set_message('
			check_email', 'That Email Address has already been taken.
							Please choose a different one');
			if ($this->user_model->check_email($email)) {
				return true;
			} else {
				return false;
			}
		}

		// loads home page
		public function uhome($page = 'home', $slug = NULL){

			$data['post'] = $this->user_model->get_posts($slug);

			// Check if User is Login
			if (!$this->session->userdata('logged_in')) {
				redirect('admission_portal/login');
			}

			if (!file_exists(APPPATH.'views/admission_portal/user/'.$page.'.php')) {
					show_404();
			}

			$data['title'] = "Welcome " . ($this->session->userdata('lname'));

			$data['news'] = $this->Posts_model->get_posts();

			$this->load->view('admission_portal/templates/header',$data);
			$this->load->view('admission_portal/user/'.$page, $data);
			$this->load->view('admission_portal/templates/footer');
		}

		// loads frequently asked questions 
		
		public function admission_news($slug = NULL){
			// Check if User is Login
			if (!$this->session->userdata('logged_in')) {
				redirect('admission_portal/login');
			}

			$data['post'] = $this->Posts_model->get_all_posts($slug);

			$data['news'] = $this->Posts_model->get_all_posts();

			$data['title'] = "Latest Admission News & Informations";

			$this->load->view('admission_portal/templates/header',$data);
			$this->load->view('admission_portal/user/admission_news', $data);
			$this->load->view('admission_portal/templates/footer');
		}

		public function news_details($slug = NULL){
			// Check if User is Login
			if (!$this->session->userdata('logged_in')) {
				redirect('admission_portal/login');
			}

			$data['post'] = ($this->Posts_model->get_posts($slug));

			$data['news'] = $this->Posts_model->recent_posts();

			//$data['row'] = $this->Posts_model->rows();

			$data['title'] = $data['post']['title'];
 
			$this->load->view('admission_portal/templates/header',$data);
			$this->load->view('admission_portal/user/news_details', $data);
			$this->load->view('admission_portal/templates/footer');
		}


		// loads undergraduate page
		public function ugraduate($page = 'ugraduate'){
			// Check if User is Login
			if (!$this->session->userdata('logged_in')) {
				redirect('admission_portal/login');
			}
			if (!file_exists(APPPATH.'views/admission_portal/user/'.$page.'.php')) {
					show_404();
			}

			$data['title'] = "Undergraduate | Admission Portal";

			$this->load->view('admission_portal/templates/header',$data);
			$this->load->view('admission_portal/user/'.$page, $data);
			$this->load->view('admission_portal/templates/footer');
		} 

		// loads transfer page
		public function transfer($page = 'transfer'){
			// Check if User is Login
			if (!$this->session->userdata('logged_in')) {
				redirect('admission_portal/login');
			}
			if (!file_exists(APPPATH.'views/admission_portal/user/'.$page.'.php')) {
					show_404();
			}

			$data['title'] = "Transfer | HNAUB Admission Portal";

			$this->load->view('admission_portal/templates/header',$data);
			$this->load->view('admission_portal/user/'.$page, $data);
			$this->load->view('admission_portal/templates/footer');
		}

		// loads graduate page
		public function graduate($page = 'graduate'){
			// Check if User is Login
			if (!$this->session->userdata('logged_in')) {
				redirect('admission_portal/login');
			}
			if (!file_exists(APPPATH.'views/admission_portal/user/'.$page.'.php')) {
					show_404();
			}

			$data['title'] = "Graduate | HNAUB Admission Portal";

			$this->load->view('admission_portal/templates/header',$data);
			$this->load->view('admission_portal/user/'.$page, $data);
			$this->load->view('admission_portal/templates/footer');
		}

		// loads message page
		public function message() {
 			
 			// Checks if the User is loggedin
 			
 			if (!$this->session->userdata('logged_in')) {
				redirect('admission_portal/login');
			}


			$data['title'] = "Send Message | HNAUB Admission Portal";			



			$this->form_validation->set_rules('full', '', 'required');
			//$this->form_validation->set_rules('lname', 'Last Name', 'required');
			$this->form_validation->set_rules('title', 'title', 'required');
			$this->form_validation->set_rules('message', 'Message', 'required');
			//$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
				

			if ($this->form_validation->run() === FALSE) {

				$data['page_title'] = "Sign Up | HNAUB Admission Portal";

				$this->load->view('admission_portal/templates/header', $data);
				$this->load->view('admission_portal/user/message',$data);
				$this->load->view('admission_portal/templates/footer');
			} else {
				
				$title = ($this->input->post('title'));

				$this->Posts_model->send_message($title);

				// var_dump($this->input->post('full'));
				// echo "<br>";

				// var_dump($this->input->post('message'));
				// echo "<br>";

				// var_dump($title);

				$this->session->set_flashdata('message_sent', 'Yup, Your message has been sent successfully, standby for drastic response.');

				redirect('admission_portal/user/inbox');
			}

			
		}

		// loads message page
		public function inbox($page = 'inbox'){
			// Check if User is Login
			if (!$this->session->userdata('logged_in')) {
				redirect('admission_portal/login');
			}
			
			$receiver = $this->session->userdata('fname') . " " . $this->session->userdata('lname') ;

			//var_dump($receiver);	


			$data['messages'] = $this->Posts_model->get_all_message($receiver);

			//var_dump($data['messages']);
			//var_dump($this->Posts_model->get_all_message($receiver));

			$data['title'] = "My Inbox | HNAUB Admission Portal";

			$this->load->view('admission_portal/templates/header',$data);
			$this->load->view('admission_portal/user/'.$page, $data);
			$this->load->view('admission_portal/templates/footer');
		}

		// loads individual message
		public function message_details($slug = NULL){

			// Check if User is Login
			if (!$this->session->userdata('logged_in')) {
				redirect('admission_portal/login');
			}

			$data['inbox'] = ($this->Posts_model->get_message($slug));

			// $data['news'] = $this->Posts_model->recent_posts();

			//$data['row'] = $this->Posts_model->rows();

			$data['title'] = $data['inbox']['title'];

			$this->load->view('admission_portal/templates/header',$data);
			$this->load->view('admission_portal/user/message_details', $data);
			$this->load->view('admission_portal/templates/footer');

		}


		// Signs up a User
		public function faqs() {
 			
 			// Checks if the User is loggedin
 			
 			if (!$this->session->userdata('logged_in')) {
				redirect('admission_portal/login');
			}

			$data['faq'] = $this->Posts_model->get_faq();

			//var_dump($data['faq']);			

			$data['title'] = 'Frequently Asked Questions | HNAUB Admission Portal';			



			$this->form_validation->set_rules('uid', 'User id', 'required');
			$this->form_validation->set_rules('question', 'Enter Question', 'required');				

			if ($this->form_validation->run() === FALSE) {

				$data['title'] = "Frequently Asked Questions | HNAUB Admission Portal";

				$this->load->view('admission_portal/templates/header', $data);
				$this->load->view('admission_portal/user/faqs',$data);
				$this->load->view('admission_portal/templates/footer');
			} else {
				// Encryt Password
				$user_id = ($this->input->post('uid'));

				$question = ($this->input->post('question'));

				//echo ($user_id);

				$this->user_model->send_question($user_id, $question);

				$this->session->set_flashdata('ques_submit', 'Your question has been sent, our Admission Office is on hand to grant you immediate response');

				redirect('admission_portal/user');
			}

			
		}

		public function profile($page = 'profile') {
			//$data['post'] = $this->post_model->get_posts($slug);

	
			$data['title'] = "Profile";

			$this->load->view('admission_portal/templates/header',$data);
			$this->load->view('admission_portal/user/'.$page, $data);
			$this->load->view('admission_portal/templates/footer');
		}

		
		// loads frequently asked questions 
		public function form($page = 'form'){
			// Check if User is Login
			if (!$this->session->userdata('logged_in')) {
				redirect('admission_portal/login');
			}
			if (!file_exists(APPPATH.'views/admission_portal/user/'.$page.'.php')) {
					show_404();
			}

			$data['title'] = "Frequently Asked Questions | HNAUB Admission Portal";

			$this->load->view('admission_portal/templates/header',$data);
			$this->load->view('admission_portal/user/'.$page, $data);
			$this->load->view('admission_portal/templates/footer');
		}

		public function news_index() {
			if (!$this->session->userdata('logged_in')) {
					redirect('admission_portal/login');
			}
			else {
				redirect('admission_portal/user/');
			}
		}

	}
?>