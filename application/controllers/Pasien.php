<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller 
{

    public function __construct() {
        parent::__construct();
		if ($this->session->userdata('logged') != TRUE) {
            $url = base_url('auth');
            redirect($url);
        };
        $this->load->model('Login_model');
        $this->load->model('Pasien_model');
    }

    public function index() {
        $data['pasien'] = $this->Pasien_model->get_all_pasien();
        $this->load->view('admin/pasien/index', $data);
    }

    public function create() {
        $this->load->view('admin/pasien/create');
    }

    public function store() {
        $data = array(
            'nama_pasien' => $this->input->post('nama_pasien'),
            'jk' => $this->input->post('jk'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat'),
        );

        $this->Pasien_model->insert_pasien($data);
		$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"><strong> Data Berhasil di Tambahkan</strong></div>');
        redirect('pasien');
    }

    public function edit($id) {
        $data['pasien'] = $this->Pasien_model->get_pasien_by_id($id);
        $this->load->view('admin/pasien/edit', $data);
    }

    public function update($id) {
        $data = array(
            'nama_pasien' => $this->input->post('nama_pasien'),
            'jk' => $this->input->post('jk'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat'),
            'status' => $this->input->post('status'),
            'ongkir' => $this->input->post('ongkir') ?: null,
        );

        $this->Pasien_model->update_pasien($id, $data);
		$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"><strong> Data Berhasil di Update</strong></div>');
        redirect('pasien');
    }

    public function delete($id) {
        $this->Pasien_model->delete_pasien($id);
		$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"><strong> Data Berhasil di Hapus</strong></div>');
        redirect('pasien');
    }
}
