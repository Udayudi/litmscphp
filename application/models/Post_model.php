<?php

    class Post_model extends CI_Model{
        public function __construct() {
            $this->load->database();
        }

        public  function get_posts($id = FALSE){
            if ($id === FALSE) {
                    $this->db->order_by('id','DESC');
                   $query = $this->db->get('posts');
                   return $query->result_array();
            }

            $query = $this->db->get_where('posts', array('id' => $id));
            return $query->row_array();

        }

        public function create_post($post_image){

            $slug = url_title($this->input->post('title'));

            $data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
                'address1'	=> $this->input->post('address1'),
                'address2'	=> $this->input->post('address2'),
                'city'	=> $this->input->post('city'),
                'state'	=> $this->input->post('state'),
                'zipcode'	=> $this->input->post('zipcode'),
                'post_image' => $post_image	
			);

            return $this->db->insert('posts', $data);
        }

        public function delete_post($id) {
            $this->db->where('id', $id);
            $this->db->delete('posts');
            return true;
        }

        public function update_post($post_image){
        //    echo $this->input->post('id');
        //    die();

            $slug = url_title($this->input->post('title'));    

            $data = array(
                'title' => $this->input->post('title'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
                'address1'	=> $this->input->post('address1'),
                'address2'	=> $this->input->post('address2'),
                'city'	=> $this->input->post('city'),
                'state'	=> $this->input->post('state'),
                'zipcode'	=> $this->input->post('zipcode'),
                'post_image' => $post_image	
            );

            $this->db->where('id', $this->input->post('id'));
            return $this->db->update('posts', $data);
        }
    }