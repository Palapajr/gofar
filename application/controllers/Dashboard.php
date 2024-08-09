<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
        // cek login user
        if ($this->session->userdata('logged') != TRUE) {
            $url = base_url('auth');
            redirect($url);
        };
        $this->load->model('Login_model');
    }

	public function index()
	{
		$this->load->view('admin/index');
	}
}
