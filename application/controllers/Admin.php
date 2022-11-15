<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Guru_model');
        $this->load->model('Admin_model');
        is_log_in();
    }
    public function hapus_laporan($id)
    {
        $this->Admin_model->Hapus_laporan($id);
    }
    public function index()
    {
        $data['alluser'] = $this->Admin_model->getAllUser();
        $data['user'] = $this->Guru_model->getGuru();
        // $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['judul'] = 'Laboratorium Astrindo Kota Tegal';
        $data['sidebar'] = 'Dashboard';
        // $data['guru'] = 
        // $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
        //     'required' => 'Nama harus diisi'
        // ]);
        // $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
        //     'required' => 'Password harus diisi',
        //     'min_length' => 'Password minimal 3 karakter huruf'
        // ]);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
    public function print_laporan()
    {
        $data['laporan'] = $this->Admin_model->getAllLaporan();
        $this->load->view('admin/print', $data);
    }

    public function laporan()
    {
        $data['user'] = $this->Guru_model->getGuru();
        // $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['judul'] = 'Laboratorium Astrindo Kota Tegal';
        $data['laporan'] = $this->Admin_model->getAllLaporan();
        $data['sidebar'] = 'Laporan Pekerjaan';
        $this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'required|trim', [
            'required' => 'pekerjaan harus diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/laporan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Admin_model->tambahLaporan();
        }
    }
    public function ubah_laporan($id)
    {
        $data['user'] = $this->Guru_model->getGuru();
        // $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['judul'] = 'Laboratorium Astrindo Kota Tegal';
        $data['sidebar'] = 'Edit Laporan';
        $data['edit'] = $this->Admin_model->getLaporanById($id);
        $data['laporan'] = $this->Admin_model->getAllLaporan();
        $this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'required|trim', [
            'required' => 'pekerjaan harus diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/ubah_laporan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Admin_model->editLaporan($id);
        }
    }
}
