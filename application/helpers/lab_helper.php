<?php
function is_log_in()
{
    $lab = get_instance();
    if (!$lab->session->userdata('nama')) {
        redirect('auth');
    } else {
        $role_id = $lab->session->userdata('role_id');
        $menu = $lab->uri->segment(1);
        $queryMenu = $lab->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];
        $userAccess = $lab->db->get_where('user_access_menu', ['role_id' => $role_id, 'menu_id' => $menu_id]);
        if ($userAccess->num_rows() < 1) {
            redirect('auth/blok');
        }
    }
}
