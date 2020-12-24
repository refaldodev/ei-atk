<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    function __construct()

    {
        parent::__construct();
        $this->load->model('transaksi_model');
        $this->load->model('barang_model');
        $this->load->model('user_model');
        $this->load->model('jenis_barang_model');
        $this->load->model('satuan_model');
        check_not_login();
    }
    public function index()
    {

        if ($this->fungsi->user_login()->level == 2) {
            $id = $this->fungsi->user_login()->user_id;
            $data['row'] = $this->transaksi_model->get($id);
            if (isset($_POST['filter'])) {
                $awal = $_POST['awal'];
                $akhir = $_POST['akhir'];
                $data['row'] = $this->transaksi_model->getDataTanggal($awal, $akhir, $id);
            }
        } else {
            $data['row'] = $this->transaksi_model->get();
            if (isset($_POST['filter'])) {
                $awal = $_POST['awal'];
                $akhir = $_POST['akhir'];
                $data['row'] = $this->transaksi_model->getDataTanggal($awal, $akhir);
            } else if (isset($_POST['reset'])) {
                $data['row'] = $this->transaksi_model->get();
            }
        }

        $data['title'] = 'Halaman Transaksi';
        $this->template->load('template', 'transaksi/transaksi_data', $data);
    }
    public function tambah()
    {
        $transaksi = new stdClass();
        $transaksi->id_transaksi = null;
        $transaksi->nama_pengambil = null;
        $transaksi->barcode = null;
        $transaksi->volume = null;
        $transaksi->user_id = null;
        $transaksi->barang_id = null;
        $transaksi->jenis_barang_id = null;
        $transaksi->satuan_id = null;
        $transaksi->transaksi_created = null;


        $barang = $this->barang_model->get();
        $query_user = $this->user_model->getUser();
        $query_jenis_barang = $this->jenis_barang_model->get();
        $query_satuan = $this->satuan_model->get();

        $data = [
            'page' => 'tambah',
            'row' => $transaksi,
            'barang' =>  $barang,
            'user' => $query_user,
            'satuan' =>  $query_user,
            'title' => 'Tambah Data',
            'jenis_barang' =>  $query_jenis_barang,
            'satuan' =>  $query_satuan,
        ];

        $this->template->load('template', 'transaksi/transaksi_form', $data);
    }
    public function transaksi_qrcode($id)
    {
        $query = $this->transaksi_model->getData($id);

        // mengetahui jumlah barang yang terscan
        $jmlScan = 0;


        // 
        if ($query->num_rows() > 0) {
            $barang = $this->barang_model->get();
            $transaksi = $query->row();
            $query_jenis_barang = $this->jenis_barang_model->get();
            $query_satuan = $this->satuan_model->get();
            $query_user = $this->user_model->getUser();
            $data = [
                'page' => 'tambah',
                'row' => $transaksi,
                'barang' =>  $barang,
                'user' => $query_user,
                'satuan' =>  $query_user,
                'title' => 'Tambah Data',
                'jenis_barang' =>  $query_jenis_barang,
                'satuan' =>  $query_satuan,
            ];
            $this->template->load('template', 'transaksi/transaksi_qrcode_form', $data);
        } else {
            echo "<script>alert('data tidak ditemukan');";
            echo "window.location='" . site_url('transaksi') . "'; 
        </script>";
        }
    }
    public function process()
    {
        $post = $this->input->post(NULL, TRUE);
        if (isset($_POST['tambah'])) {
            $this->transaksi_model->tambah($post);
        } else if (isset($_POST['edit'])) {
            $this->transaksi_model->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil ditambah');
        }
        redirect('transaksi');
    }
    public function getDataBarang()
    {
        $idjenisbarang = $this->input->post('id');
        $data = $this->transaksi_model->getDataBarang($idjenisbarang);
        $output = '<option value="">--Pilih--</option>';
        foreach ($data as $row) {
            $output .= '<option value="' . $row->barang_id . '">' . $row->nama_barang . ' </option>';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }
    public function getDataAutoComplete()
    {
        $autocomplete = $this->input->get('term');
        if ($autocomplete) {
            $getDataAutoComplete = $this->barang_model->getDataAutoComplete($autocomplete);
            foreach ($getDataAutoComplete as $row) {
                $results[] = array(
                    'label' => $row['nama_barang']
                );

                $this->output->set_content_type('application/json')->set_output(json_encode($results));
            }
        }
    }
    public function edit($id)
    {
        $query = $this->transaksi_model->getEdit($id);
        if ($query->num_rows() > 0) {
            $barang = $this->barang_model->get();
            $transaksi = $query->row();
            $query_jenis_barang = $this->jenis_barang_model->get();
            $query_satuan = $this->satuan_model->get();
            $query_user = $this->user_model->getUser();
            $data = [
                'page' => 'edit',
                'row' => $transaksi,
                'barang' =>  $barang,
                'user' => $query_user,
                'satuan' =>  $query_user,
                'title' => 'Tambah Data',
                'jenis_barang' =>  $query_jenis_barang,
                'satuan' =>  $query_satuan,
            ];
            $this->template->load('template', 'transaksi/transaksi_form', $data);
        } else {
            echo "<script>alert('data tidak ditemukan');";
            echo "window.location='" . site_url('transaksi') . "'; 
        </script>";
        }
    }
    public function hapus($id)
    {
        $this->transaksi_model->hapus($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'data berhasil dihapus');
        }
        redirect('transaksi');
    }

    public function scan()
    {
        $data['name_page'] = 'transaksi';
        $data['title'] = "Scan Qrcode";
        $this->template->load('templatescan', 'scan', $data);
    }
}
