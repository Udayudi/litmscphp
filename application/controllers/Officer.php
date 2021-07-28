<?php

class Officer extends CI_Controller {
    public function officerlogin() {

        $this->load->view('templates/header');
        $this->load->view('officer/login');
        $this->load->view('templates/footer');

    }


    

}