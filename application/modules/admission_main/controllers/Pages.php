<?php
	class Pages extends MX_Controller {
		
		//loads the index page
		public function view($page = 'home'){
			if (!file_exists(APPPATH.'views/admission_main/'.$page.'.php')) {
					show_404();
			}

			$data['title'] = ucfirst($page);

			$data['news'] = $this->Posts_model->get_posts();

			$this->load->view('templates/header', $data);
			$this->load->view('admission_main/'.$page, $data);
			$this->load->view('templates/footer');

			$this->session->set_flashdata('welcome_note', 'Thanks for stopping by to HNAUB Admission Office, apply for undergraduate studies and also apply as a transfer students');
		}
		
		// loads the undergraduate page
		public function ugrad($page = 'undergraduate'){
			if (!file_exists(APPPATH.'views/admission_main/'.$page.'.php')) {
					show_404();
			}

			$data['title'] = ucfirst($page);

			$this->load->view('templates/header', $data);
			$this->load->view('admission_main/'.$page, $data);
			$this->load->view('templates/footer');
		}

		public function trans($page = 'transfer'){
			if (!file_exists(APPPATH.'views/admission_main/'.$page.'.php')) {
					show_404();
			}

			$data['title'] = ucfirst($page);

			$this->load->view('templates/header', $data);
			$this->load->view('admission_main/'.$page, $data);
			$this->load->view('templates/footer');
		}

		public function contact($page = 'contact'){

			if (!file_exists(APPPATH.'views/admission_main/'.$page.'.php')) {
					show_404();
			}

			$data['title'] = ucfirst($page);

			$this->form_validation->set_rules('fname', 'First Name', 'required');
			$this->form_validation->set_rules('email', 'Email Address', 'required');
			$this->form_validation->set_rules('phone', 'Phone', 'required');
			$this->form_validation->set_rules('message', 'Message', 'required');
			//$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header', $data);
				$this->load->view('admission_main/'.$page, $data);
				$this->load->view('templates/footer');
			} else {

				$this->Posts_model->send_message();

				$this->session->set_flashdata('message_sent', 'Thanks for sending us a message, our reliable team are on hand to respond to your request');

				redirect();
			}
		}

		public function news($slug = NULL) {


			$data['post'] = ($this->Posts_model->get_posts($slug));

			$data['news'] = $this->Posts_model->get_posts();

			// var_dump($data);
			// if (empty($data['post'])) {
			// 	show_404();
			// }

			$data['title'] = $data['post']['title'];

			$this->load->view('templates/header', $data);
			$this->load->view('admission_main/news_details', $data);
			$this->load->view('templates/footer');
		}
	}

?>