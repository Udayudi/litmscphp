<?php

class Admin extends CI_Controller {
    public function adminlogin() {

        $this->load->view('templates/header');
        $this->load->view('admin/login');
        $this->load->view('templates/footer');

    }


    

}