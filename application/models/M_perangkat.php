<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_perangkat extends CI_Model
{
    // Metode yang sudah ada
    public function Semuadata()
    {
        return $this->db->get('perangkat')->result_array();
    }

    public function proses_tambah_perangkat()
    {
        $data = [
            "kode_perangkat" => $this->input->post('kode_perangkat'),
            "nama_perangkat" => $this->input->post('nama_perangkat'),
            "jenis_perangkat" => $this->input->post('jenis_perangkat'),
            "merek" => $this->input->post('merek'),
            "jumlah" => $this->input->post('jumlah'),
            "kondisi" => $this->input->post('kondisi'),
            "lokasi" => $this->input->post('lokasi'),
        ];

        $this->db->insert('perangkat', $data);
        $this->session->set_flashdata('flash', 'Ditambahkan');
    }

    public function delete_perangkat($id_perangkat)
    {
        $this->db->where('id_perangkat', $id_perangkat);
        $this->db->delete('perangkat');
    }
    public function ambil_id_perangkat($id_perangkat)
    {
        return $this->db->get_where('perangkat', ['id_perangkat' => $id_perangkat])->row_array();
    }

    public function proses_edit_perangkat($id_perangkat)
    {
        $data = [
            'kode_perangkat' => $this->input->post('kode_perangkat'),
            'nama_perangkat' => $this->input->post('nama_perangkat'),
            'jenis_perangkat' => $this->input->post('jenis_perangkat'),
            'merek' => $this->input->post('merek'),
            'jumlah' => $this->input->post('jumlah'),
            'kondisi' => $this->input->post('kondisi'),
            'lokasi' => $this->input->post('lokasi')
        ];

        $this->db->where('id_perangkat', $id_perangkat);
        $this->db->update('perangkat', $data);
    }

    // Metode baru untuk laporan berdasarkan kondisi
    public function print_perangkat($condition)
    {
        $this->db->where('kondisi', $condition);
        return $this->db->get('perangkat')->result_array();
    }
}
