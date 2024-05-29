<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_teknisi extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Admin area';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('_part/backend_head', $data);
        $this->load->view('teknisi/sidebar_teknisi');
        $this->load->view('_part/backend_topbar_v');
        $this->load->view('profile/profile', $data);
        $this->load->view('_part/backend_footer_v');
        $this->load->view('_part/backend_foot');
    }
}
