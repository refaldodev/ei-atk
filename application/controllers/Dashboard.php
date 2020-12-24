<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('transaksi_model');
    }
    public function index()
    {
        $params = array(
            'nama_page' => 'dashboard'

        );
        $this->session->set_userdata($params);
        $data['row'] = $this->transaksi_model->get();
        if ($this->fungsi->user_login()->level == 2) {
            $data['total'] = $this->transaksi_model->totalTransaksiPegawai();
        } else {
            $data['total'] = $this->transaksi_model->totalTransaksiAdmin();
        }
        if ($this->fungsi->user_login()->level == 2) {

            $data['rows'] = $this->transaksi_model->getDataPerTanggalPegawai();
        } else {
            $data['rows'] = $this->transaksi_model->getDataPerTanggalAdmin();
        }


        $data['title'] = "Halaman Dashboard";
        $this->template->load('template', 'dashboard', $data);
    }
    public function scan()
    {
        $data['name_page'] = 'dashboard';
        $data['title'] = "Scan Qrcode";
        $this->template->load('templatescan', 'scan', $data);
    }
}
