<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
    }
	
	public function index() {
		if(!empty($this->session->userdata('bas_id'))){
			// redirect when logged in
			redirect(base_url('dashboard'), 'refresh');	
		} 
		
		if($_POST) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$password = md5($password);
			//if(isset($_POST['remember-me'])){$remind='true';}else{$remind='';}
			
			if($username && $password) {
				if($this->Crud->check2('username', $username, 'password', $password, 'user') <= 0 && $this->Crud->check2('email', $username, 'password', $password, 'user') <= 0){
					echo $this->Crud->msg('danger', 'Username/Email or password is wrong!');
				} else {
					$query = $this->Crud->read2('username', $username, 'password', $password, 'user');
					if(empty($query)) {
						// then query by email
						$query = $this->Crud->read2('email', $username, 'password', $password, 'user');
					}
					
					if(!empty($query)) {
						foreach($query as $row) {
							//update status and last log
							$this->Crud->update('id', $row->id, 'user', array('status'=>1, 'last_log'=>date(fdate)));
							
							// save id in session
							$this->session->set_userdata('bas_id', $row->id);
						}
						
						echo $this->Crud->msg('success', 'Login Successful');
						
						// redirect
						echo '<script>window.location.replace("'.base_url('dashboard').'");</script>';
					}
				}
			}

			die;
		}
		
		$data['title'] = 'Login | '.app_name;
		$data['page_active'] = 'login';
		$this->load->view('designs/auth_header', $data);
		$this->load->view('login', $data);
		$this->load->view('designs/auth_footer', $data);
	}
	
}