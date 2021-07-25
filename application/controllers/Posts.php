<?php 

class Posts extends CI_Controller {
    public function index(){
            
            $this->load->view('templates/header');
			$this->load->view('posts/index');
			$this->load->view('templates/footer');
    }

    public function create() {
        $this->load->view('templates/header');
				$this->load->view('posts/create');
				$this->load->view('templates/footer');
    }
}