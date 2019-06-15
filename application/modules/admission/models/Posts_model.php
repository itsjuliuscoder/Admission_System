<?php
	class Posts_Model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}

		public function get_posts($slug = FALSE, $id = NULL) {

			if ($slug === FALSE) {
				$this->db->order_by('posts.id', '	DESC');
				$this->db->limit(3);
				//$this->db->join('categories', 'categories.id = posts.category_id');
				$query = $this->db->get('posts');
				return $query->result_array();
				
			}

			$query = $this->db->get_where('posts', array('slug' => $slug));
			return $query->row_array();

		}

		public function recent_posts($slug = FALSE, $id = NULL) {

			if ($slug === FALSE) {
				$this->db->order_by('posts.id', 'RANDOM');
				
				//$this->db->limit(3);
				//$this->db->join('categories', 'categories.id = posts.category_id');
				$query = $this->db->get('posts');
				return $query->result_array();
				
			}

			$query = $this->db->get_where('posts', array('slug' => $slug));
			return $query->row_array();

		}

		public function get_all_posts($slug = FALSE, $id = NULL) {

			if ($slug === FALSE) {
				$this->db->order_by('posts.id', '	DESC');
				//$this->db->join('categories', 'categories.id = posts.category_id');
				$query = $this->db->get('posts');
				return $query->result_array();
				
			}

			$query = $this->db->get_where('posts', array('slug' => $slug));
			return $query->row_array();

		}
		
		public function create_post($post_image){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
				'category_id' => $this->input->post('category_id'),
				'post_image' => $post_image 
			 );

			return $this->db->insert('posts', $data);
		}

		public function delete_post($id) {
			$this->db->where('id', $id);
			$this->db->delete('posts');
			return true;
		}

		public function update_post() {
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
				'category_id' => $this->input->post('category_id')
			 );

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('posts', $data);
		}

		public function get_categories(){
			$this->db->order_by('name');
			$query = $this->db->get('categories');
			return $query->result_array();
		}

		public function send_message($title){
			// User data array 
			$data = array(
				'sender' => $this->input->post('full') ,
				'title' => $title,
				//'phone' => $this->input->post('phone') ,
				'message' => $this->input->post('message')			
				 );

			// Insert user
			return $this->db->insert('inbox', $data);
		}

		public function get_all_message($receiver) {

			if ($receiver != FALSE) {
				$this->db->order_by('inbox.id', '	DESC');
				$this->db->where_in('reciever', $receiver);
				$this->db->or_where_in('reciever', 'Default');
				//$this->db->join('categories', 'categories.id = posts.category_id');
				$query = $this->db->get('inbox');
				return $query->result_array();

				// $condition = "reciever =" . "'" . $receiver. "'";
				// $this->db->select('*');
				// $this->db->from('inbox');
				// $this->db->where($condition);
				// //$this->db->limit(1);
				// $query = $this->db->get();
			}

			$query = $this->db->get_where('inbox', array('reciever' => $receiver));
			return $query->row_array();

		}

		public function get_message($slug = FALSE, $id = NULL) {

			if ($slug === FALSE) {
				$this->db->order_by('inbox.id', '	DESC');
				$this->db->limit(3);
				//$this->db->join('categories', 'categories.id = posts.category_id');
				$query = $this->db->get('inbox');
				return $query->result_array();
				
			}

			$query = $this->db->get_where('inbox', array('slug' => $slug));
			return $query->row_array();

		}

		public function get_faq() {

				$this->db->order_by('faqs.id', '	DESC');
				$this->db->or_where_not_in('answer', '' );
				//$this->db->join('categories', 'categories.id = posts.category_id');
				$query = $this->db->get('faqs');
				return $query->result_array();
						
		}
	}
?>