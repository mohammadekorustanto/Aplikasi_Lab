<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Guru_model');
        is_log_in();
    }
    public function pakai()
    {
        $data['user'] = $this->Guru_model->getGuru();
        // $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['judul'] = 'Lab TKJ Astrindo Kota Tegal 75';
        $data['kelas'] = [
            'X TKJ 1', 'X TKJ 2', 'X TKJ 3', 'X MM 1', 'X AKL 1', 'X TKRO 1', 'X TKRO 2', 'X TKRO 3',
            'XI TKJ 1', 'XI TKJ 2', 'XI MM 1', 'XI AKL 1', 'XI TKRO 1', 'XI TKRO 2', 'XI TKRO 3',
            'XII TKJ 1', 'XII TKJ 2', 'XII MM 1', 'XII AKL 1', 'XII TKRO 1', 'XII TKRO 2', 'XII TKRO 3'
        ];
        $data['jam'] = [
            'Pertama',
            'Kedua',
            'Ketiga'
        ];

        $data['sidebar'] = 'Data Pemakaian Lab';
        // $data['guru'] = $this->Guru_model->getGuruBy();
        $data['lab'] = $this->Guru_model->getAllLab();
        // $data['guru'] = 
        $this->form_validation->set_rules('hari', 'Hari', 'required|trim', [
            'required' => 'Hari harus diisi'
        ]);
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim', [
            'required' => 'Kelas harus diisi'
        ]);
        $this->form_validation->set_rules('jam', 'jam', 'required|trim', [
            'required' => 'Jam harus diisi'
        ]);
        $this->form_validation->set_rules('guru_pengampuh', 'Guru Pengampuh', 'required|trim', [
            'required' => 'Guru Pengampuh harus diisi'
        ]);
        $this->form_validation->set_rules('lab', 'Laboratorium', 'required|trim', [
            'required' => 'Laboratorium harus diisi'
        ]);
        $this->form_validation->set_rules('kondisi_awal_pembelajaran', 'Kondisi Awal Pembelajaran', 'required|trim', [
            'required' => 'Kondisi Awal Pembelajaran harus diisi'
        ]);
        $this->form_validation->set_rules('kondisi_saat_pembelajaran', 'Kondisi Saat Pembelajaran', 'required|trim', [
            'required' => 'Kondisi Saat Pembelajaran harus diisi'
        ]);
        $this->form_validation->set_rules('kondisi_akhir_pembelajaran', 'Kondisi Akhir Pembelajaran', 'required|trim', [
            'required' => 'Kondisi Akhir Pembelajaran harus diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('lab/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Guru_model->TambahPemakaianLab();
        }
    }
    public function print_pakai()
    {
        $data['user'] = $this->Guru_model->getGuru();
        $data['pakai'] = $this->Guru_model->getAllLab();
        $this->load->view('lab/print_pakai_lab', $data);
    }
    public function index()
    {
        $data['user'] = $this->Guru_model->getGuru();
        // $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['judul'] = 'Lab TKJ Astrindo Kota Tegal 75';
        $data['sidebar'] = 'Data diri saya';
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
        $this->load->view('guru/index', $data);
        $this->load->view('templates/footer');
    }
    public function keluar()
    {
        $this->Guru_model->keluar();
    }
    // public function daftar()
    // {
    //     $data['judul'] = 'Lab TKJ Astrindo Kota Tegal 75';
    //     $data['sub'] = 'Daftar';
    //     $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
    //         'required' => 'Nama harus diisi'
    //     ]);
    //     $this->form_validation->set_rules('mapel', 'Mapel', 'required|trim', [
    //         'required' => 'Mapel harus diisi'
    //     ]);
    //     $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
    //         'required' => 'Password harus diisi',
    //         'matches' => 'Password harus sama',
    //         'min_length' => 'Password minimal 3 karakter huruf'
    //     ]);
    //     $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
    //         'required' => 'Password harus diisi',
    //         'matches' => 'Password harus sama'
    //     ]);
    //     if ($this->form_validation->run() == false) {
    //         $this->load->view('templates/header_auth', $data);
    //         $this->load->view('auth/daftar', $data);
    //         $this->load->view('templates/footer_auth');
    //     } else {
    //         $this->Auth_model->Daftar_model();
    //     }
    // }
}
