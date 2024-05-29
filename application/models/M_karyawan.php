<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_karyawan extends CI_Model
{
    // Metode yang sudah ada
    public function Semuadata()
    {
        return $this->db->get('karyawan')->result_array();
    }
    public function proses_tambah_karyawan()
    {
        $data = [
            "nik" => $this->input->post('nik'),
            "nama" => $this->input->post('nama'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "alamat" => $this->input->post('alamat'),
            "no_telepon" => $this->input->post('no_telepon'),
        ];

        $this->db->insert('karyawan', $data);
    }
    public function delete_karyawan($id_karyawan)
    {
        $this->db->where('id_karyawan', $id_karyawan);
        $this->db->delete('karyawan');
    }
    public function ambil_id_karyawan($id_karyawan)
    {
        return $this->db->get_where('karyawan', ['id_karyawan' => $id_karyawan])->row_array();
    }
    public function proses_edit_karyawan($id_karyawan)
    {
        $data = [
            "nik" => $this->input->post('nik'),
            "nama" => $this->input->post('nama'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "alamat" => $this->input->post('alamat'),
            "no_telepon" => $this->input->post('no_telepon'),
        ];

        $this->db->where('id_karyawan', $id_karyawan);
        $this->db->update('karyawan', $data);
    }
    public function print_karyawan()
    {
        return $this->db->get('karyawan')->result_array();
    }
}
