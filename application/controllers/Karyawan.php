<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Data Karyawan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['karyawan'] = $this->M_karyawan->Semuadata();

        $this->load->view('_part/backend_head', $data);
        $this->load->view('admin/sidebar_admin');
        $this->load->view('_part/backend_topbar_v');
        $this->load->view('karyawan/karyawan', $data);
        $this->load->view('_part/backend_footer_v');
        $this->load->view('_part/backend_foot');
        $this->load->view('_part/flash_message'); // Load flash message view
    }

    public function tambah_karyawan()
    {
        $data['title'] = 'Halaman Tambah Karyawan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['karyawan'] = $this->M_karyawan->Semuadata();

        $this->load->view('_part/backend_head', $data);
        $this->load->view('admin/sidebar_admin');
        $this->load->view('_part/backend_topbar_v');
        $this->load->view('karyawan/tambah_karyawan', $data);
        $this->load->view('_part/backend_footer_v');
        $this->load->view('_part/backend_foot');
        $this->load->view('_part/flash_message'); // Load flash message view
    }

    public function proses_tambah_karyawan()
    {
        $config['upload_path'] = './gambar/';
        $config['allowed_types'] = 'gif|jpg|png|PNG';
        $config['max_size'] = 10000;
        $config['max_width'] = 10000;
        $config['max_height'] = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            echo "Gagal Tambah";
        } else {
            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];
            $nik = $this->input->post('nik', TRUE);
            $nama = $this->input->post('nama', TRUE);
            $jenis_kelamin = $this->input->post('jenis_kelamin', TRUE);
            $alamat = $this->input->post('alamat', TRUE);
            $no_telepon = $this->input->post('no_telepon', TRUE);

            $data = array(
                'nik' => $nik,
                'nama' => $nama,
                'jenis_kelamin' => $jenis_kelamin,
                'alamat' => $alamat,
                'no_telepon' => $no_telepon,
                'gambar' => $gambar // Add the file name to the data array
            );

            $this->db->insert('karyawan', $data);
            $this->session->set_flashdata('pesan', 'Data Baru Berhasil Disimpan');
            $this->session->set_flashdata('type', 'success');
            redirect('karyawan');
        }
    }

    public function delete_karyawan($id_karyawan)
    {
        // Ambil data karyawan berdasarkan id_karyawan
        $karyawan = $this->M_karyawan->ambil_id_karyawan($id_karyawan);
        // Hapus file foto jika ada
        if ($karyawan && !empty($karyawan['gambar'])) {
            // Tentukan path file foto
            $file_path = './gambar/' . $karyawan['gambar'];
            // Cek apakah file foto ada di folder
            if (file_exists($file_path)) {
                // Hapus file foto dari folder
                unlink($file_path);
            }
        }
        // Hapus data karyawan dari database
        $this->M_karyawan->delete_karyawan($id_karyawan);
        // Set flash data pesan
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        $this->session->set_flashdata('type', 'error');
        // Redirect ke halaman karyawan
        redirect('karyawan');
    }



    public function proses_edit_karyawan($id_karyawan)
    {
        // Konfigurasi untuk upload file
        $config['upload_path'] = './gambar/';
        $config['allowed_types'] = 'gif|jpg|png|PNG';
        $config['max_size'] = 10000;
        $config['max_width'] = 10000;
        $config['max_height'] = 10000;

        // Memuat library upload dengan konfigurasi yang telah dibuat
        $this->load->library('upload', $config);

        // Cek apakah ada file yang diupload
        if ($this->upload->do_upload('userfile')) {
            // Jika ada file baru yang diupload, gunakan file tersebut
            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];
        } else {
            // Jika tidak ada file baru yang diupload, gunakan file lama
            $gambar = $this->input->post('old_image');
        }

        // Mengambil data dari form input
        $nik = $this->input->post('nik', TRUE);
        $nama = $this->input->post('nama', TRUE);
        $jenis_kelamin = $this->input->post('jenis_kelamin', TRUE);
        $alamat = $this->input->post('alamat', TRUE);
        $no_telepon = $this->input->post('no_telepon', TRUE);

        // Membuat array data untuk diupdate ke database
        $data = array(
            'nik' => $nik,
            'nama' => $nama,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat' => $alamat,
            'no_telepon' => $no_telepon,
            'gambar' => $gambar // Menambahkan nama file gambar ke array data
        );

        // Melakukan update data di database berdasarkan id_karyawan
        $this->db->where('id_karyawan', $id_karyawan);
        $this->db->update('karyawan', $data);

        // Mengatur pesan flash untuk notifikasi sukses
        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
        $this->session->set_flashdata('type', 'info');

        // Mengarahkan kembali ke halaman daftar karyawan
        redirect('karyawan');
    }
    public function print_karyawan()
    {
        $data['title'] = 'Halaman Laporan Karyawan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Memanggil model untuk mendapatkan semua data karyawan tanpa filter
        $data['karyawan'] = $this->M_karyawan->print_karyawan();

        $this->load->view('_part/backend_head', $data);
        $this->load->view('admin/sidebar_admin');
        $this->load->view('_part/backend_topbar_v');
        $this->load->view('karyawan/print_karyawan', $data);
        $this->load->view('_part/backend_footer_v');
        $this->load->view('_part/backend_foot');
    }
    public function cetak_karyawan()
    {
        $data['title'] = 'Laporan Data Karyawan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Memanggil model untuk mendapatkan semua data karyawan tanpa filter
        $data['karyawan'] = $this->M_karyawan->print_karyawan();

        $this->load->view('karyawan/cetak_karyawan', $data); // Menggunakan view print_karyawan untuk menampilkan laporan
    }
}
