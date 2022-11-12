<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru_model extends CI_Model
{
    public function getAllLab()
    {
        return $this->db->get('pemakaian_lab')->result_array();
    }
    public function Getguru()
    {
        return $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
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
    public function TambahPemakaianLab()
    {
        $data = [
            'hari' => htmlspecialchars($this->input->post('hari', true)),
            'kelas' => htmlspecialchars($this->input->post('kelas', true)),
            'jam' => htmlspecialchars($this->input->post('jam', true)),
            'guru_pengampuh' => htmlspecialchars($this->input->post('guru_pengampuh', true)),
            'lab' => htmlspecialchars($this->input->post('lab', true)),
            'kondisi_awal_pembelajaran' => htmlspecialchars($this->input->post('kondisi_awal_pembelajaran', true)),
            'kondisi_saat_pembelajaran' => htmlspecialchars($this->input->post('kondisi_saat_pembelajaran', true)),
            'kondisi_akhir_pembelajaran' => htmlspecialchars($this->input->post('kondisi_akhir_pembelajaran', true)),
        ];
        $this->db->insert('pemakaian_lab', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                 Data berhasil dimasukan...
                 </div>');
        redirect('guru/pakai');
    }
}