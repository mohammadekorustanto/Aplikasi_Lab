<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function Daftar_model()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'mapel' => htmlspecialchars($this->input->post('mapel', true)),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => 2
        ];
        $this->db->insert('user', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        User berhasil didaftarkan...
        </div>');
        redirect('auth');
    }
    public function Login_model()
    {
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['nama' => $nama])->row_array();
        // jika akun terdaftar
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'nama' => $user['nama'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                if ($user['role_id'] == 1) {
                    redirect('admin');
                } else {
                    redirect('guru');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                 Password anda salah...
                 </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
             Nama anda terdaftar...
             </div>');
            redirect('auth');
        }
    }
}
