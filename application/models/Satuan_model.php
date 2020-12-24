<?php
defined('BASEPATH') or exit('No direct script access allowed');

class satuan_model extends CI_Model
{

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('satuan');
        $this->db->Where('satuan_name', $post['satuan_name']);
        $this->db->Where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }
    public function getsatuan()
    {
        $query = $this->db->get('satuan');
        $data = $query->result();
        return $data;
    }
    public function get($id = null)
    {
        $this->db->from('satuan');
        if ($id != null) {

            $this->db->Where('satuan_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    // add
    public function tambah($post)
    {
        $params['name'] = $post['name'];
        $this->db->insert('satuan', $params);
    }

    public function edit($post)
    {
        $params = [
            'name' => $post['name'],
        ];

        $this->db->where('satuan_id', $post['id']);
        $this->db->update('satuan', $params);
    }

    public function hapus($id)
    {
        $this->db->where('satuan_id', $id);
        $this->db->delete('satuan');
    }
}
