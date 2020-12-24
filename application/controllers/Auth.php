<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function login()
    {
        check_already_login();

        $this->load->view('auth/login');
    }

    public function process()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', array('required' => 'Username wajib diisi!'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'Password wajib diisi!'));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/login');
        } else {
            $post = $this->input->post(null, TRUE);
            if (isset($post['login'])) {
                $this->load->model('user_model');
                $query = $this->user_model->login($post);
                if ($query->num_rows() > 0) {
                    $row = $query->row();

                    $params = array(
                        'userid' => $row->user_id,
                        'level' => $row->level,
                        'name_page' => 'dashboard'
                    );
                    $this->session->set_userdata($params);
                    echo "<script>
                    alert('Login berhasil');
                    window.location='" . site_url('dashboard') . "';
                     </script>";
                } else {
                    echo "<script>
                    alert('Login gagal');
                    window.location='" . site_url('auth/login') . "';
                     </script>";
                }
            }
        }
    }
    public function logout()
    {
        $params = array('userid', 'level');
        $this->session->unset_userdata($params);
        redirect('auth/login');
    }
}
