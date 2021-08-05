<?php

    class User_model extends CI_Model {
        public function user_register($enc_password) {
            $data = array(
                'name' => $this->input->post('name'),
                'name' => $this->input->post('name'),
                'name' => $this->input->post('name'),
                'name' => $this->input->post('name'),
                'name' => $this->input->post('name'),
                'name' => $this->input->post('name'),
                'name' => $this->input->post('name'),
                'name' => $this->input->post('name')
            );
            return $this->db->insert('users', $data);
        }
    }