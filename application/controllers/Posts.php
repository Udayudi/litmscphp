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

            // Check Login
            if (!$this->session->userdata('logged_in')) {
                redirect('users/login');
            }

            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('body', 'Body', 'required');
            $this->form_validation->set_rules('address1', 'Address 1', 'required');
            $this->form_validation->set_rules('address2', 'Address 2', 'required');
            $this->form_validation->set_rules('city', 'City', 'required');
            $this->form_validation->set_rules('state', 'State', 'required');
            $this->form_validation->set_rules('zipcode', 'Zipcode', 'required');

            if($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('posts/create');
                $this->load->view('templates/footer');
            } else {
                // Upload Image
                $config['upload_path'] = './assets/images/posts';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

                $this->load->library('upload', $config);
               
                if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$post_image = 'noimage.jpg';
				} else {
                    $data = array('upload_data' => $this->upload->data());
					$post_image = $_FILES['userfile']['name'];
                }

                $this->post_model->create_post($post_image);
                redirect('posts');
            }

    }

    public function delete($id) {

          // Check Login
          if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        // echo $id;   

        $this->post_model->delete_post($id);
        redirect('posts');
    }

    public function edit($id) {

          // Check Login
          if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $data['post'] = $this->post_model->get_posts($id);

        //  print_r ($data['post']);

        if (empty($data['post'])) {
            show_404();
        }

        $data['title'] = 'Edit Post';
            
            $this->load->view('templates/header');
			$this->load->view('posts/edit', $data);
			$this->load->view('templates/footer');
    }

    public function update() {

          // Check Login
          if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

       $this->post_model->update_post();
       redirect('posts');
    }
}