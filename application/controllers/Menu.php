<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model');
        $this->load->library('form_validation');
        is_log_in();
    }
    // public function hapus($id)
    // {
    //     $this->Menu_model->Hapusmenu($id);
    // }
    public function index()
    {
        $data['user'] = $this->Menu_model->Dataguru();
        $data['judul'] = 'Menu Management | SMK Astrindo';
        $data['sidebar'] = 'Menu Management';
        $data['menu'] = $this->Menu_model->getAllMenu();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/index', $data);
        $this->load->view('templates/footer');
    }
    public function submenu()
    {
        $data['user'] = $this->Menu_model->Dataguru();
        $data['judul'] = 'Menu Management | SMK Astrindo';
        $data['sidebar'] = 'Submenu Management';
        $data['submenu'] = $this->Menu_model->getAllSubmenu();
        $data['submenu'] = $this->Menu_model->getSubmenu();
        $this->form_validation->set_rules('menu', 'Menu', 'required', [
            'required' => 'Menu harus diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Menu_model->Tambahsubmenu();
        }
    }
}
