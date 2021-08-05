<?php

    class Post_model extends CI_Model{
        public function __construct() {
            $this->load->database();
        }

        public  function get_posts($id = FALSE){
            if ($id === FALSE) {
                   $query = $this->db->get('posts');
                   return $query->result_array();
            }

            $query = $this->db->get_where('posts', array('id' => $id));
            return $query->row_array();

        }

        // public function create_post(){
            
        //     $data = array(
		// 		'title' => $this->input->post('title'),
		// 		'slug' => $slug,
		// 		'body' => $this->input->post('body'),
		// 		'category_id' => $this->input->post('category_id'),
		// 		'user_id' => $this->session->userdata('user_id'),
				
		// 	);

        //     return $this->db->insert('posts', $data);
        // }
    }