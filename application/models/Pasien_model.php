<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends CI_Model {

    public function get_all_pasien() {
        return $this->db->get('pasien')->result_array();
    }

    public function get_pasien_by_id($id) {
        return $this->db->get_where('pasien', ['id' => $id])->row_array();
    }

    public function insert_pasien($data) {
        return $this->db->insert('pasien', $data);
    }

    public function update_pasien($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('pasien', $data);
    }

    public function delete_pasien($id) {
        $this->db->where('id', $id);
        return $this->db->delete('pasien');
    }
}
