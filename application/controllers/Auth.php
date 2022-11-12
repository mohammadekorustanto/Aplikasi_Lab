<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_model');
    }
    public function blok()
    {
        $this->load->view('auth/blok');
    }
    public function index()
    {
        $data['judul'] = 'Lab TKJ Astrindo Kota Tegal 75';
        $data['sub'] = 'Login';
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama harus diisi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'required' => 'Password harus diisi',
            'min_length' => 'Password minimal 3 karakter huruf'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_auth', $data);
            $this->load->view('auth/login', $data);
            $this->load->view('templates/footer_auth');
        } else {
            $this->Auth_model->Login_model();
        }
    }
    public function daftar()
    {
        $data['judul'] = 'Lab TKJ Astrindo Kota Tegal 75';
        $data['sub'] = 'Daftar';
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama harus diisi'
        ]);
        $this->form_validation->set_rules('mapel', 'Mapel', 'required|trim', [
            'required' => 'Mapel harus diisi'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'required' => 'Password harus diisi',
            'matches' => 'Password harus sama',
            'min_length' => 'Password minimal 3 karakter huruf'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
            'required' => 'Password harus diisi',
            'matches' => 'Password harus sama'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_auth', $data);
            $this->load->view('auth/daftar', $data);
            $this->load->view('templates/footer_auth');
        } else {
            $this->Auth_model->Daftar_model();
        }
    }
}
