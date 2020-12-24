<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_barang_model extends CI_Model
{

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('jenis_barang');
        $this->db->Where('jenis_barangname', $post['jenis_barangname']);
        $this->db->Where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }
    public function getjenis_barang()
    {
        $query = $this->db->get('jenis_barangs');
        $data = $query->result();
        return $data;
    }
    public function get($id = null)
    {
        $this->db->from('jenis_barang');
        if ($id != null) {

            $this->db->Where('jenis_barang_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    // add
    public function tambah($post)
    {
        $params = [
            'jenis_barang_id' => $post['jenis_barang_id'],
            'name' => $post['name']
        ];

        $this->db->insert('jenis_barang', $params);
    }

    public function edit($post)
    {
        $params = [
            'jenis_barang_id' => $post['jenis_barang_id'],
            'name' => $post['name'],
        ];

        $this->db->where('jenis_barang_id', $post['id']);
        $this->db->update('jenis_barang', $params);
    }

    public function hapus($id)
    {
        $this->db->where('jenis_barang_id', $id);
        $this->db->delete('jenis_barang');
    }
}
