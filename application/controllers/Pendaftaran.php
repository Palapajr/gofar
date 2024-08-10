<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
	public function __construct() {
        parent::__construct();
        $this->load->model('Pasien_model');
    }

	public function index()
	{
		$this->load->view('index');
	}

	public function store(){
		$data = array(
            'nama_pasien' => $this->input->post('nama_pasien'),
            'jk' => $this->input->post('jk'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat'),
        );

        $this->Pasien_model->insert_pasien($data);
		$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"><strong> Terima kasih Data Anda Akan Diproses</strong></div>');
        redirect('pendaftaran');
	}
}
