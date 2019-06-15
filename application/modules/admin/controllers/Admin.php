<?php
	class Admin extends MX_Controller{

		//loads the index page
		public function view(){
			// if (!file_exists(APPPATH.'views/admission_admin/'.$page.'.php')) {
			//  		show_404();
			// }


			// Checks if the User is not loggedin
			if (!$this->session->userdata('logged_in')) {
				redirect('admission_admin');
			}

			$data['users'] = $this->admin_model->get_users();

			$data['ugrad'] = $this->admin_model->ugrad();

			$data['tran'] = $this->admin_model->tran();

			$data['faq'] = $this->admin_model->faq();

			$data['contacts'] = $this->admin_model->contact();

			$data['posts'] = $this->admin_model->get_posts();

			$data['row'] = $this->admin_model->num_user();

			$data['num_ugrad'] = $this->admin_model->num_ugrad();

			$data['num_tran'] = $this->admin_model->num_tran();

			$data['num_contact'] = $this->admin_model->num_contact();

			$data['num_inbox'] = $this->admin_model->num_inbox();

			$data['admin'] = $this->admin_model->get_admin();

			$data['title'] = "Welcome " .   $this->session->userdata('fname');


			$this->load->view('admission_admin/parts/header', $data);
			$this->load->view('admission_admin/home', $data);
			$this->load->view('admission_admin/templates/footer');
		}



		// Logs in a User
		public function login() {

			// Checks if the User is loggedin
			if ($this->session->userdata('logged_in')) {
				redirect('admission_admin/home');
			}

			$data['page_title'] = "Log In | HNAUB Admission Office";
			
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');				

			if ($this->form_validation->run() === FALSE) {

				$this->load->view('admission_admin/templates/header', $data);
				$this->load->view('admission_admin/login',$data);
				$this->load->view('admission_admin/templates/footer');
			}

			else {

				$email = $this->input->post('email');

				// Get and encrypt the password 
				$enc_password = sha1($this->input->post('password'));

				//Login user 
				$user_info = $this->admin_model->login($email, $enc_password);

				if ($user_info) {

					$sess_array = array(
						'email' => $this->input->post('email') 
					);

					// Create the Session
					$this->session->set_userdata('logged_in', $sess_array);
					$result = $this->admin_model->read_user_information($sess_array);
					if ($result != false) {
						$data = array(
							'id' =>$result[0]->id,
							'fname' =>$result[0]->fname,
							'lname' =>$result[0]->lname, 
							'email' =>$result[0]->email,
							'phone' =>$result[0]->phone,
							'profile_image'=>$result[0]->profile_image,
							'position' =>$result[0]->position,
							'password' =>$result[0]->password,
						);

						//$user_info['gender_id'] = $this->user_model->gender_id($id)['name'];

						$this->session->set_userdata($data);

						redirect('admission_admin/home');

						$this->session->set_flashdata('user_loggedin', '<b>Welcome</b> You are now logged in');


					}
					// Set Message

				} else {

					$this->session->set_flashdata('login_failed', '<b>Ooops</b> Email or Password seems to be wrong');

					redirect('admission_admin');
				}
				
			}
			
		}

		public function logout() {
			// Unset userdata 
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('id');
			$this->session->unset_userdata('fname');
			$this->session->unset_userdata('lname');
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('phone');
			$this->session->unset_userdata('profile_image');
			$this->session->unset_userdata('position');

			$this->session->set_flashdata('user_loggedout', '<b>Yeah!</b> You are now logged out');

			redirect('admission_admin');
		}

		public function rpassword($page = 'password_recovery') {

			if (!file_exists(APPPATH.'views/admission_admin/'.$page.'.php')) {
			 		show_404();
			}

			$data['page_title'] = "Password Recovery | HNAUB Admission Office";

			//$data['news'] = $this->Posts_model->get_posts();

			$this->load->view('admission_admin/templates/header', $data);
			$this->load->view('admission_admin/'.$page, $data);
			$this->load->view('admission_admin/templates/footer');

		}



		public function register() {

			// Checks if the User is not loggedin
			if (!$this->session->userdata('logged_in')) {
				redirect('admission_admin');
			}

			$data['page_title'] = 'Add a new Admin | HNAUB Admission Office';

			//$data['genders'] = $this->user_model->get_gender();

			$this->form_validation->set_rules('fname', 'First Name', 'required');
			$this->form_validation->set_rules('lname', 'Last Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('phone', 'Phone Number', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
			$this->form_validation->set_rules('position', 'Position', 'required');

			//$data['page_title'] = 'Sign Up to SMART GEEKS';


			if ($this->form_validation->run() === FALSE){
				
				$this->load->view('admission_admin/templates/header', $data);
				$this->load->view('admission_admin/register',$data);
				$this->load->view('admission_admin/templates/footer');

			} else {

					//Encrypt the password 
					$enc_password = sha1($this->input->post('password'));

					//upload image
					$config['upload_path'] = './assets/profile_pictures';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size'] = '2048';
					$config['max_width'] = '2000';
					$config['max_height'] = '2000';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload() == TRUE) {
						$data = array('upload_data' => $this->upload->data());
						$profile_image = $_FILES['userimage']['name'];
					} else {
						$errors = array('error' => $this->upload->display_errors());
						$profile_image = 'noimage.jpg';
					}

					//$this->user_model->register_user($profile_image);
				

					$this->admin_model->register_user($profile_image,$enc_password);

					redirect('admission_admin/home');

			}
		}

		public function profile() {

			// Checks if the User is not loggedin
			if (!$this->session->userdata('logged_in')) {
				redirect('admission_admin');
			}

			$data['page_title'] = 'Profile | HNAUB Admission Office';

			$data['contacts'] = $this->admin_model->contact();

			$data['num_admin'] = $this->admin_model->num_admin();

			$data['admin'] = $this->admin_model->get_admin();

			//$data['genders'] = $this->user_model->get_gender();

			$this->form_validation->set_rules('fname', 'First Name', 'required');
			$this->form_validation->set_rules('lname', 'Last Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('phone', 'Phone Number', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
			$this->form_validation->set_rules('position', 'Position', 'required');

			//$data['page_title'] = 'Sign Up to SMART GEEKS';


			if ($this->form_validation->run() === FALSE){
				
				$this->load->view('admission_admin/templates/header', $data);
				$this->load->view('admission_admin/profile',$data);
				$this->load->view('admission_admin/templates/footer');

			} else {

					//Encrypt the password 
					$enc_password = sha1($this->input->post('password'));

					//upload image
					$config['upload_path'] = './assets/profile_pictures';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size'] = '2048';
					$config['max_width'] = '2000';
					$config['max_height'] = '2000';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload() == TRUE) {
						$data = array('upload_data' => $this->upload->data());
						$profile_image = $_FILES['userimage']['name'];
					} else {
						$errors = array('error' => $this->upload->display_errors());
						$profile_image = 'noimage.jpg';
					}

					//$this->user_model->register_user($profile_image);
				

					$this->admin_model->register_user($profile_image,$enc_password);

					redirect('admission_admin/home');

			}
		}

		public function chat_room() {

			// Checks if the User is not loggedin
			if (!$this->session->userdata('logged_in')) {
				redirect('admission_admin');
			}

			$data['page_title'] = 'Join the Conversation | HNAUB Admission Office';

			$data['contacts'] = $this->admin_model->contact();

			$data['admin'] = $this->admin_model->get_admin();

			$data['num_admin'] = $this->admin_model->num_admin();

			//$data['genders'] = $this->user_model->get_gender();

			$this->form_validation->set_rules('fname', 'First Name', 'required');
			$this->form_validation->set_rules('lname', 'Last Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('phone', 'Phone Number', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
			$this->form_validation->set_rules('position', 'Position', 'required');

			//$data['page_title'] = 'Sign Up to SMART GEEKS';


			if ($this->form_validation->run() === FALSE){
				
				$this->load->view('admission_admin/templates/header', $data);
				$this->load->view('admission_admin/chat_room',$data);
				$this->load->view('admission_admin/templates/footer');

			} else {

			}
		}

		
		// loads message page
		public function message() {

			// Checks if the User is not loggedin
			if (!$this->session->userdata('logged_in')) {
				redirect('admission_admin');
			}

			$data['page_title'] = 'Join the Conversation | HNAUB Admission Office';

			$data['contacts'] = $this->admin_model->contact();

			$data['admin'] = $this->admin_model->get_admin();

			//$data['genders'] = $this->user_model->get_gender();

			$this->form_validation->set_rules('fname', 'First Name', 'required');
			$this->form_validation->set_rules('lname', 'Last Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('phone', 'Phone Number', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
			$this->form_validation->set_rules('position', 'Position', 'required');

			//$data['page_title'] = 'Sign Up to SMART GEEKS';


			if ($this->form_validation->run() === FALSE){
				
				$this->load->view('admission_admin/templates/header', $data);
				$this->load->view('admission_admin/compose',$data);
				$this->load->view('admission_admin/templates/footer');

			} else {

			}
		}

		// loads message page
		public function inbox() {

			// Checks if the User is not loggedin
			if (!$this->session->userdata('logged_in')) {
				redirect('admission_admin');
			}

			$data['page_title'] = 'Join the Conversation | HNAUB Admission Office';

			$data['contacts'] = $this->admin_model->contact();

			$data['admin'] = $this->admin_model->get_admin();

			//$data['genders'] = $this->user_model->get_gender();

			$this->form_validation->set_rules('fname', 'First Name', 'required');
			$this->form_validation->set_rules('lname', 'Last Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('phone', 'Phone Number', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
			$this->form_validation->set_rules('position', 'Position', 'required');

			//$data['page_title'] = 'Sign Up to SMART GEEKS';


			if ($this->form_validation->run() === FALSE){
				
				$this->load->view('admission_admin/templates/header', $data);
				$this->load->view('admission_admin/inbox',$data);
				$this->load->view('admission_admin/templates/footer');

			} else {

			}
		}

		// // loads frequently asked questions 
		// public function faqs($page = 'faqs'){
		// 	// Check if User is Login
		// 	if (!$this->session->userdata('logged_in')) {
		// 		redirect('admission_portal/login');
		// 	}
		// 	if (!file_exists(APPPATH.'views/admission_portal/user/'.$page.'.php')) {
		// 			show_404();
		// 	}

		// 	$data['title'] = "Frequently Asked Questions | HNAUB Admission Portal";

		// 	$this->load->view('admission_portal/templates/header',$data);
		// 	$this->load->view('admission_portal/user/'.$page, $data);
		// 	$this->load->view('admission_portal/templates/footer');
		// }

		// // loads frequently asked questions 
		// public function form($page = 'form'){
		// 	// Check if User is Login
		// 	if (!$this->session->userdata('logged_in')) {
		// 		redirect('admission_portal/login');
		// 	}
		// 	if (!file_exists(APPPATH.'views/admission_portal/user/'.$page.'.php')) {
		// 			show_404();
		// 	}

		// 	$data['title'] = "Frequently Asked Questions | HNAUB Admission Portal";

		// 	$this->load->view('admission_portal/templates/header',$data);
		// 	$this->load->view('admission_portal/user/'.$page, $data);
		// 	$this->load->view('admission_portal/templates/footer');
		// }

		// public function news_index() {
		// 	if (!$this->session->userdata('logged_in')) {
		// 			redirect('admission_portal/login');
		// 	}
		// 	else {
		// 		redirect('admission_portal/user/');
		// 	}
		// }

		// public function view($slug = NULL) {
		// 	$data['post'] = $this->post_model->get_posts($slug);

		// 	if (empty($data['post'])) {
		// 		show_404();
		// 	}

		// 	$data['title'] = $data['post']['title'];

		// 	$this->load->view('admission_portal/templates/header');
		// 	$this->load->view('admission_portal/users/views', $data);
		// 	$this->load->view('admission_portal/templates/footer');
		// }
	}
?>