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


        $data['sidebar'] = 'Data Pemakaian Lab';
        // $data['guru'] = $this->Guru_model->getGuruBy();
        $data['lab'] = $this->Guru_model->getAllLab();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('lab/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_pemakaian()
    {
        $data['judul'] = 'Lab TKJ SMK Astrindo 75';
        $data['sidebar'] = 'Form Tambah Pemakaian Lab';
        $data['hari'] = [
            'Minggu',
            'Senin',
            'Selasa',
            'Rabu',
            'Kamis',
            'Jumat',
            'Sabtu'
        ];
        $data['kelas'] = [
            'X TKJ 1', 'X TKJ 2', 'X TKJ 3',
            'XI TKJ 1',
            'XII TKJ 1', 'XII TKJ 2'
        ];
        $data['jam'] = [
            'Pertama',
            'Kedua',
            'Ketiga'
        ];
        $data['user'] = $this->Guru_model->getGuru();
        $this->form_validation->set_rules('hari', 'Hari', 'required|trim', [
            'required' => 'Hari harus diisi'
        ]);
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim', [
            'required' => 'Tanggal harus diisi'
        ]);
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim', [
            'required' => 'Kelas harus diisi'
        ]);
        $this->form_validation->set_rules('jam', 'Jam', 'required|trim', [
            'required' => 'Jam harus diisi'
        ]);
        $this->form_validation->set_rules('guru_pengampuh', 'Guru Pengampuh', 'required|trim', [
            'required' => 'Guru Pengampuh harus diisi'
        ]);
        $this->form_validation->set_rules('lab', 'Lab', 'required|trim', [
            'required' => 'Lab harus diisi'
        ]);
        $this->form_validation->set_rules('materi', 'Materi', 'required|trim', [
            'required' => 'Materi harus diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('lab/tambah_pemakai', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Guru_model->TambahPemakaianLab();
        }
    }
    public function ubah_pemakaian($id)
    {
        $data['judul'] = 'Lab TKJ SMK Astrindo 75';
        $data['pemakai'] = $this->Guru_model->getLabById($id);
        $data['sidebar'] = 'Form Ubah Pemakaian Lab';
        $data['hari'] = [
            'Minggu',
            'Senin',
            'Selasa',
            'Rabu',
            'Kamis',
            'Jumat',
            'Sabtu'
        ];
        $data['kelas'] = [
            'X TKJ 1', 'X TKJ 2', 'X TKJ 3',
            'XI TKJ 1',
            'XII TKJ 1', 'XII TKJ 2'
        ];
        $data['jam'] = [
            'Pertama',
            'Kedua',
            'Ketiga'
        ];
        $data['user'] = $this->Guru_model->getGuru();
        $this->form_validation->set_rules('hari', 'Hari', 'required|trim', [
            'required' => 'Hari harus diisi'
        ]);
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim', [
            'required' => 'Tanggal harus diisi'
        ]);
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim', [
            'required' => 'Kelas harus diisi'
        ]);
        $this->form_validation->set_rules('jam', 'Jam', 'required|trim', [
            'required' => 'Jam harus diisi'
        ]);
        $this->form_validation->set_rules('guru_pengampuh', 'Guru Pengampuh', 'required|trim', [
            'required' => 'Guru Pengampuh harus diisi'
        ]);
        $this->form_validation->set_rules('lab', 'Lab', 'required|trim', [
            'required' => 'Lab harus diisi'
        ]);
        $this->form_validation->set_rules('materi', 'Materi', 'required|trim', [
            'required' => 'Materi harus diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('lab/ubah_pemakai', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Guru_model->UbahPemakaianLab($id);
        }
    }
    public function hapus_pemakaian($id)
    {
        $this->Guru_model->HapusPemakaianLab($id);
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
