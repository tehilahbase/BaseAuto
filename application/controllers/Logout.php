<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	function __construct() {
        parent::__construct();
    }
	
	public function index() {
		if(!empty($this->session->userdata('bas_id'))) {
			$user_id = $this->session->userdata('bas_id');
			$up_data['status'] = 0;
			if($this->Crud->update('id', $user_id, 'user', $up_data) > 0) {
				$this->session->set_userdata('bas_id', '');
				$this->session->sess_destroy();
			}
		}
		
		$data['title'] = 'Login | '.app_name;
		$data['page_active'] = 'login';
		$this->load->view('designs/auth_header', $data);
		$this->load->view('login', $data);
		$this->load->view('designs/auth_footer', $data);
	}
	
}