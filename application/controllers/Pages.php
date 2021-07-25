<?php
	class Pages extends CI_Controller{
		public function view($naveen = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$naveen.'.php')){
				show_404();
			}

			$this->load->view('templates/header');
			$this->load->view('pages/'.$naveen);
			$this->load->view('templates/footer');
		}
	}