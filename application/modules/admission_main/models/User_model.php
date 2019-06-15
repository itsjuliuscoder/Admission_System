<?php
	class User_model  extends CI_model{
		public function __construct() {
			$this->load->database();
		}
		// Registers a User
		public function register_user($enc_password){
			// User data array 
			$data = array(
				'fname' => $this->input->post('fname') ,
				'lname' => $this->input->post('lname') ,
				'password' => $enc_password,
				'email' => $this->input->post('email')				
				 );

			// Insert user
			return $this->db->insert('users', $data);
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
			$result = $this->db->get_where('users', array('email' => $email, 'password' => $enc_password));
			//$this->db->where('users', array('password' => $enc_password));

			//$result = $this->db->get('users');

			if ($result->num_rows() == 1) {
				return $result->row(0)->id;
			} else {
				return false;
			}
		}

		public function get_posts($slug = FALSE) {
			if ($slug === FALSE) {
				$this->db->order_by('posts.id', '	DESC');
				$this->db->join('categories', 'categories.id = posts.category_id');
				$query = $this->db->get('posts');
				return $query->result_array();

			}

			$query = $this->db->get_where('posts', array('slug' => $slug));
			return $query->row_array();
		}

	}
	
?>