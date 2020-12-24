<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('user_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = "Data User";
        $data['row'] = $this->user_model->getUser();
        $this->template->load('template', 'user/user_data', $data);
    }

    public function tambah()
    {
        $data['title'] = "Tambah Data";

        $this->form_validation->set_rules(
            'fullname',
            'Fullname',
            'required'
        );
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|min_length[5]|is_unique[users.username]'
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|min_length[5]'
        );

        $this->form_validation->set_rules(
            'passconf',
            'Passconf',
            'required|min_length[5]|matches[password]'
        );

        $this->form_validation->set_rules(
            'level',
            'Level',
            'required'
        );



        $this->form_validation->set_message('required', '%s Masih kosong silahkan diisi');
        $this->form_validation->set_message('matches', '{field} Tidak sesuai');
        $this->form_validation->set_message('min_length', '{field} Minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '{field} sudah dipakai, silahkan ganti yang lain');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Halaman Tambah Data";
            $this->template->load('template', 'user/tambah_data', $data);
        } else {
            $data = $this->input->post(NULL, TRUE);
            $this->user_model->tambah($data);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('data berhasil di simpan');</script>";
            }
            echo "<script>  window.location='" . site_url('user') . "'; 
            </script>";
        }
    }

    // edit user
    public function edit($id)
    {
        $data['title'] = "Tambah Data";

        $this->form_validation->set_rules(
            'fullname',
            'Fullname',
            'required'
        );
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|min_length[5]|callback_username_check'
        );
        if ($this->input->post('password')) {

            $this->form_validation->set_rules(
                'password',
                'Password',
                'min_length[5]'
            );

            $this->form_validation->set_rules(
                'passconf',
                'Passconf',
                'min_length[5]|matches[password]'
            );
        }

        $this->form_validation->set_rules(
            'level',
            'Level',
            'required'
        );



        $this->form_validation->set_message('required', '%s Masih kosong silahkan diisi');
        $this->form_validation->set_message('matches', '{field} Tidak sesuai');
        $this->form_validation->set_message('min_length', '{field} Minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '{field} sudah dipakai, silahkan ganti yang lain');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->user_model->get($id);
            if ($query->num_rows() > 0) {
                $data['title'] = "Halaman Tambah Data";
                $data['row'] = $query->row();
                $this->template->load('template', 'user/edit_data', $data);
            } else {
                echo "<script>alert('data tidak ditemukan');";
                echo "window.location='" . site_url('user') . "'; 
            </script>";
            }
        } else {
            $post = $this->input->post(NULL, TRUE);
            $this->user_model->edit($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('data berhasil di simpan');</script>";
            }
            echo "<script>  window.location='" . site_url('user') . "'; 
            </script>";
        }
    }
    public function hapus()
    {
        $id = $this->input->post('user_id');
        $this->user_model->hapus($id);
        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('data berhasil di hapus');</script>";
        }
        echo "<script>  window.location='" . site_url('user') . "'; 
    </script>";
    }
    public function data()
    {
        $data['title'] = "Halaman User";
        $this->template->load('template', 'user/tambah_data', $data);
    }
    function username_check()
    {
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM users WHERE username = '$post[username]' AND user_id != '$post[user_id]' ");
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('username_check', '{field} ini sudah dipakai, silahkan ganti');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}
