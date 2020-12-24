<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->Where('username', $post['username']);
        $this->db->Where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }
    public function getUser()
    {
        $query = $this->db->get('users');

        $data = $query->result();
        return $data;
    }
    public function get($id = null)
    {
        $this->db->from('users');
        if ($id != null) {

            $this->db->Where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    // add
    public function tambah($post)
    {
        $params['username'] = $post['username'];
        $params['password'] = sha1($post['password']);
        $params['name'] = $post['fullname'];

        $params['level'] = $post['level'];
        $this->db->insert('users', $params);
    }

    public function edit($post)
    {
        $params['username'] = $post['username'];
        if (!empty($post['password'])) {

            $params['password'] = sha1($post['password']);
        }
        $params['name'] = $post['fullname'];

        $params['level'] = $post['level'];
        $this->db->where('user_id', $post['user_id']);
        $this->db->update('users', $params);
    }

    public function hapus($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('users');
    }
}
