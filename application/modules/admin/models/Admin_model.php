<?php
	class Admin_model  extends CI_model{

		public function __construct() {
			$this->load->database();
	}
		
		public function register_user($profile_image, $enc_password){
	 		// User data array 
			$data = array(
	 			'fname' => $this->input->post('fname'),
	 			'lname' => $this->input->post('lname'),
	 			'email' => $this->input->post('email'),
	 			'password' => $enc_password,
	 			'phone' => $this->input->post('phone'),
	 			'profile_image' => $profile_image,
	 			'position' => $this->input->post('position')
				 );

			// Insert user
			return $this->db->insert('admin', $data);
		}

		// Check if email exists 
		public function check_email($email){
			$query = $this->db->get_where('users',  array('email' => $email));
			if (empty($query->row_array())) {
				return true;
			} else {
				return false;
			}
		}

		public function login($email, $enc_password) {
			// Validate 
			$result = $this->db->get_where('admin', array('email' => $email, 'password' => $enc_password));
			//$this->db->where('users', array('password' => $enc_password));

			//$result = $this->db->get('users');

			if ($result->num_rows() == 1) {
				return $result->row(0)->id;
			} else {
				return false;
			}
		}

		public function read_user_information($sess_array) {

			$condition = "email =" . "'" . $sess_array['email'] . "'";
			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() == 1) {
			
			return $query->result();
			
			} else {

			return false;
			
			}
		}


		public function get_users($slug = FALSE) {
				$this->db->order_by('users.id', '	DESC');
				//$this->db->join('categories', 'categories.id = posts.category_id');
				$query = $this->db->get('users');
				return $query->result_array();
		}

		public function get_posts($slug = FALSE) {
				$this->db->order_by('posts.id', '	DESC');
				//$this->db->join('categories', 'categories.id = posts.category_id');
				$query = $this->db->get('posts');
				return $query->result_array();
		}

		public function contact(){
			$this->db->order_by('id', ' DESC');
			$query = $this->db->get('contact');
			return $query->result_array();
		}

		// Get People that applied for undergraduate studies 
		public function ugrad(){
			$this->db->order_by('id', ' DESC');
			$query = $this->db->get('ugraduate');
			return $query->result_array();
		}

		// Fetch People that applied for undergraduate studies 
		public function tran(){
			$this->db->order_by('id', ' DESC');
			$query = $this->db->get('transfer');
			return $query->result_array();
		}

		// Fetch all frequently asked questions
		public function faq(){
			$this->db->order_by('id', ' DESC');
			$query = $this->db->get('faqs');
			return $query->result_array();
		}

		public function get_admin($slug = FALSE) {
				$this->db->order_by('admin.id', '	DESC');
				//$this->db->join('categories', 'categories.id = posts.category_id');
				$query = $this->db->get('admin');
				return $query->result_array();
		}

		public function num_user() {
			return $this->db->count_all('users');

		}

		public function num_ugrad() {
			return $this->db->count_all('ugraduate');

		}

		public function num_tran() {
			return $this->db->count_all('transfer');

		}

		public function num_admin() {
			return $this->db->count_all('admin');

		}

		// Loops through all contact message
		public function num_contact() {
			return $this->db->count_all('contact');

		}

		// Loops through all Inbox message
		public function num_inbox() {
			return $this->db->count_all('inbox');

		}

	}



	
?>