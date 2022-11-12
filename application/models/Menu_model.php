<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getAllMenu()
    {
        return $this->db->get('user_menu')->result_array();
    }
    public function getAllSubmenu()
    {
        return $this->db->get('user_sub_menu')->result_array();
    }
    public function getSubmenu()
    {
        $query = "SELECT `user_sub_menu`.*,`user_menu`.`menu`
                FROM `user_sub_menu` JOIN `user_menu`
                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
        ";
        return $this->db->query($query)->result_array();
    }
    public function Tambahmenu()
    {
        $data = [
            'menu' => $this->input->post('menu')
        ];
        $this->db->insert('user_menu', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                 Menu berhasil ditambah...
                 </div>');
        redirect('menu');
    }
    public function Dataguru()
    {
        return $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
    }
    public function Hapusmenu($id)
    {
        $this->db->delete('user_menu', array('id' => $id));
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                 Menu berhasil dihapus...
                 </div>');
        redirect('menu');
    }
}
