<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perangkat extends CI_Controller
{
    // Metode yang sudah ada
    public function index()
    {
        $data['title'] = 'Halaman Data Perangkat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['perangkat'] = $this->M_perangkat->Semuadata();

        $this->load->view('_part/backend_head', $data);
        $this->load->view('admin/sidebar_admin');
        $this->load->view('_part/backend_topbar_v');
        $this->load->view('perangkat/perangkat', $data);
        $this->load->view('_part/backend_footer_v');
        $this->load->view('_part/backend_foot');
        $this->load->view('_part/flash_message'); // Load flash message view
    }

    public function tambah_perangkat()
    {
        $data['title'] = 'Halaman Tambah Perangkat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['perangkat'] = $this->M_perangkat->Semuadata();

        $this->load->view('_part/backend_head', $data);
        $this->load->view('admin/sidebar_admin');
        $this->load->view('_part/backend_topbar_v');
        $this->load->view('perangkat/tambah_perangkat', $data);
        $this->load->view('_part/backend_footer_v');
        $this->load->view('_part/backend_foot');
        $this->load->view('_part/flash_message'); // Load flash message view
    }

    public function proses_tambah_perangkat()
    {
        $this->M_perangkat->proses_tambah_perangkat();
        $this->session->set_flashdata('pesan', 'Data Baru Berhasil Disimpan');
        $this->session->set_flashdata('type', 'success');
        redirect('perangkat');
    }

    public function delete_perangkat($id_perangkat)
    {
        $this->M_perangkat->delete_perangkat($id_perangkat);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        $this->session->set_flashdata('type', 'error');
        redirect('perangkat');
    }

    public function edit_perangkat($id_perangkat)
    {
        $data['title'] = 'Halaman Edit Perangkat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['perangkat'] = $this->M_perangkat->ambil_id_perangkat($id_perangkat);

        $this->load->view('_part/backend_head', $data);
        $this->load->view('admin/sidebar_admin');
        $this->load->view('_part/backend_topbar_v');
        $this->load->view('perangkat/edit_perangkat', $data);
        $this->load->view('_part/backend_footer_v');
        $this->load->view('_part/backend_foot');
        $this->load->view('_part/flash_message'); // Load flash message view
    }

    public function proses_edit_perangkat($id_perangkat)
    {
        $this->M_perangkat->proses_edit_perangkat($id_perangkat);
        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
        $this->session->set_flashdata('type', 'info');
        redirect('perangkat');
    }


    // Metode baru untuk laporan berdasarkan kondisi
    public function print_perangkat()
    {
        $condition = $this->input->get('condition'); // Mendapatkan nilai kondisi dari inputan pengguna
        $data['title'] = 'Halaman Laporan Perangkat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($condition) {
            $data['perangkat'] = $this->M_perangkat->print_perangkat($condition);
            $data['condition'] = $condition; // Meneruskan nilai $condition ke view
        } else {
            $data['perangkat'] = [];
        }

        $this->load->view('_part/backend_head', $data);
        $this->load->view('admin/sidebar_admin');
        $this->load->view('_part/backend_topbar_v');
        $this->load->view('perangkat/print_perangkat', $data);
        $this->load->view('_part/backend_footer_v');
        $this->load->view('_part/backend_foot');
    }

    public function cetak_perangkat()
    {
        $condition = $this->input->get('condition'); // Mendapatkan nilai kondisi dari inputan pengguna
        $data['title'] = 'Laporan Perangkat Berdasarkan Kondisi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($condition) {
            $data['perangkat'] = $this->M_perangkat->print_perangkat($condition);
            $data['condition'] = $condition; // Meneruskan nilai $condition ke view
        } else {
            $data['perangkat'] = [];
        }
        $this->load->view('perangkat/cetak_perangkat', $data); // Menggunakan view cetak_perangkat untuk menampilkan laporan
    }
}
