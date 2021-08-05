<?php 

class Posts extends CI_Controller {
    public function index(){
            
        $data['posts'] = $this->post_model->get_posts();

        // // Printing Array 
        // print_r ($data['posts']);

            $this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
    }

    public function view($id = NULL) {
        $data['post'] = $this->post_model->get_posts($id);

        //  print_r ($data['post']);

        if (empty($data['post'])) {
            show_404();
        }

        $data['title'] = $data['post']['title'];
            
            $this->load->view('templates/header');
			$this->load->view('posts/view', $data);
			$this->load->view('templates/footer');

    }

    public function create() {
        $this->load->view('templates/header');
				$this->load->view('posts/create');
				$this->load->view('templates/footer');
    }
}