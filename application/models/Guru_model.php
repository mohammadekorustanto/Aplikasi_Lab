<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru_model extends CI_Model
{
    public function TambahPemakaianLab()
    {
        $data = [
            'hari' => htmlspecialchars($this->input->post('hari', true)),
            'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
            'kelas' => htmlspecialchars($this->input->post('kelas', true)),
            'jam' => htmlspecialchars($this->input->post('jam', true)),
            'guru_pengampuh' => htmlspecialchars($this->input->post('guru_pengampuh', true)),
            'lab' => htmlspecialchars($this->input->post('lab', true)),
            'materi' => htmlspecialchars($this->input->post('materi', true)),
        ];
        $this->db->insert('pemakaian_lab', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                 Data Berhasih Ditambahkan...
                 </div>');
        redirect('guru/pakai');
    }
    public function UbahPemakaianLab($id)
    {
        $data = [
            'hari' => htmlspecialchars($this->input->post('hari', true)),
            'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
            'kelas' => htmlspecialchars($this->input->post('kelas', true)),
            'jam' => htmlspecialchars($this->input->post('jam', true)),
            'guru_pengampuh' => htmlspecialchars($this->input->post('guru_pengampuh', true)),
            'lab' => htmlspecialchars($this->input->post('lab', true)),
            'materi' => htmlspecialchars($this->input->post('materi', true)),
        ];
        $this->db->update('pemakaian_lab', $data, ['id' => $id]);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                 Data Berhasih Diubah...
                 </div>');
        redirect('guru/pakai');
    }
    public function HapusPemakaianLab($id)
    {
        $this->db->delete('pemakaian_lab', ['id' => $id]);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                 Data Berhasih Dihapus...
                 </div>');
        redirect('guru/pakai');
    }
    public function getAllLab()
    {
        return $this->db->get('pemakaian_lab')->result_array();
    }
    public function Getguru()
    {
        return $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
    }
    public function getLabById($id)
    {
        return $this->db->get_where('pemakaian_lab', ['id' => $id])->row_array();
    }
    public function keluar()
    {
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                 Keluar...
                 </div>');
        redirect('auth');
    }
}
