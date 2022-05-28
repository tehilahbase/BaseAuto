<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

	public function index() {
		
		$data['title'] = app_name.' | '.app_meta_desc;
		$data['page_active'] = 'main';
		
		$this->load->view('designs/header', $data);
		$this->load->view('main', $data);
		$this->load->view('designs/footer', $data);
	}
}
