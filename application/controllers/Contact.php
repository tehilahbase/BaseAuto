<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

	public function index() {
		if($_POST) {
			$firstname = $this->input->post('firstname');
			$lastname = $this->input->post('lastname');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$message = $this->input->post('message');

			if($firstname && $lastname && $email && $phone && $message) {
				$response = array($firstname, $lastname, $email, $phone, $message);

				echo '
					<div class="col-xs-12">	
						<div class="text-center col-xs-12 bg-success" style="padding:15px;">
							'.json_encode($response).'
						</div>
					</div>
				';
			}

			die;
		}


		$data['title'] = 'Contact Us | '.app_name;
		$data['page_active'] = 'contact';
		
		$this->load->view('designs/header', $data);
		$this->load->view('contact', $data);
		$this->load->view('designs/footer', $data);
	}
}
