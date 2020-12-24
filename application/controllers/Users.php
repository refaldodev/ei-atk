<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Halaman User';
        $this->load->view('users/header', $data);
        $this->load->view('users/index.php', $data);
    }
    public function home()
    {
        $data['title'] = 'Halaman Home';
        $this->load->view('users/home');
    }
    public function transaksi_form()
    {
        $data['title'] = 'Halaman Transaksi';
        $this->load->view('users/transaksi_form', $data);
    }
    public function scan()
    {
        $data['title'] = 'Halaman scan qrcode';
        $this->load->view('users/header', $data);

        $this->load->view('users/scan', $data);
    }
}
