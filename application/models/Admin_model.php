<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }
    public function Hapus_laporan($id)
    {
        $this->db->delete('laporan_pekerjaan', ['id' => $id]);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                 Data berhasil dihapus
                 </div>');
        redirect('admin/laporan');
    }
    public function getAllLaporan()
    {

        return $this->db->get('laporan_pekerjaan')->result_array();
    }
    public function tambahLaporan()
    {
        $data = [
            'hari' => htmlspecialchars($this->input->post('hari', true)),
            'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan', true))
        ];
        $this->db->insert('laporan_pekerjaan', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                 Data berhasil ditambahkan
                 </div>');
        redirect('admin/laporan');
    }
}
