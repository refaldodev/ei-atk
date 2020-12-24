<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('barang_model');
        $this->load->model('jenis_barang_model');
        $this->load->model('satuan_model');
        $this->load->model('transaksi_model');
        $this->load->library('form_validation');


        check_not_login();
        check_admin();
    }


    public function index()
    {
        $data['row']  = $this->barang_model->get();
        $data['title'] = "Halaman barang";

        $this->template->load('template', 'product/barang_data', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('jenis_barang', 'JenisBarang', 'required');
        $this->form_validation->set_rules('barang_id', 'barang_id', 'required');
        $this->form_validation->set_rules('barcode', 'barcode', 'required');


        $this->form_validation->set_rules(
            'barcode',
            'Barcode',
            'required|is_unique[barang.barcode]'
        );
        $this->form_validation->set_message('required', '%s Masih kosong silahkan diisi');
        $this->form_validation->set_message('is_unique', '{field} sudah dipakai, silahkan ganti yang lain');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run() == FALSE) {

            $barang = new stdClass();
            $barang->barang_id = null;


            $barang->barcode = null;
            $barang->nama_barang = null;
            $barang->jenis_barang_id = null;
            $barang->satuan_id = null;
            $query_jenis_barang = $this->jenis_barang_model->get();
            $query_satuan = $this->satuan_model->get();


            $data = [
                'page' => 'tambah',
                'row' => $barang,
                'jenis_barang' =>  $query_jenis_barang,
                'satuan' =>  $query_satuan,
                'title' => 'Tambah Data',
            ];
            $this->template->load('template', 'product/barang_form', $data);
        } else {
            $post = $this->input->post(NULL, TRUE);
            if (isset($_POST['tambah'])) {
                $this->barang_model->tambah($post);
            }
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil ditambah');
            }
            redirect('barang');
        }
    }

    // public function process()
    // {
    // }

    public function edit($id)
    {
        $this->form_validation->set_rules(
            'barcode',
            'Barcode',
            'required'
        );
        $this->form_validation->set_message('required', '%s Masih kosong silahkan diisi');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run() == FALSE) {

            $query = $this->barang_model->get($id);
            if ($query->num_rows() > 0) {
                $barang = $query->row();
                $query_jenis_barang = $this->jenis_barang_model->get();
                $query_satuan = $this->satuan_model->get();
                $data = array(
                    'page' => 'edit',
                    'row' => $barang,
                    'jenis_barang' => $query_jenis_barang,
                    'satuan' => $query_satuan,
                    'title' => 'Edit Data',
                );
                $this->template->load('template', 'product/barang_edit', $data);
            } else {
                echo "<script>alert('data tidak ditemukan');";
                echo "window.location='" . site_url('barang') . "'; 
        </script>";
            }
        } else {
            $post = $this->input->post(NULL, TRUE);
            if (isset($_POST['edit'])) {
                $this->barang_model->edit($post);
            }
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil diubah');
            }
            redirect('barang');
        }
    }

    public function hapus($id)
    {
        $this->barang_model->hapus($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'data berhasil dihapus');
        }
        redirect('barang');
    }

    function barcode_qrcode($id)
    {

        $data = [
            'row' => $this->barang_model->get($id)->row(),
            'rows' => $this->transaksi_model->get($id)->row(),
            'title' => 'Barcode and Qr-Code'
        ];
        $this->template->load('template', 'product/barcode', $data);
    }
    function barcode_print($id)
    {
        $data['row'] = $this->barang_model->get($id)->row();
        $html = $this->load->view('product/barcode_print', $data, true);
        $this->fungsi->pdfGenerator($html, 'barcode-' . $data['row']->barcode, 'A4', 'Landscape');
    }
    function qrcode_print($id)
    {
        $data['row'] = $this->barang_model->get($id)->row();
        $html = $this->load->view('product/qrcode_print', $data, true);
        $this->fungsi->pdfGenerator($html, 'qrcode-' . $data['row']->barcode, 'A4', 'Landscape');
    }
    function qrcode_print_all()
    {
        $this->load->library('mypdf');
        $data['row'] = $this->barang_model->getUser('barang')->result();
        $data['title'] = 'QR CODE';
        $this->mypdf->generate('product/qrcode_print_all', $data);
        // $html = $this->load->view('product/qrcode_print_all', $data, true);
        // $this->fungsi->pdfGenerator($html, 'qrcode-' . $data['row']->barcode, 'A4', 'Landscape');
    }

    function qrcode_link()
    {
        $data['title'] = 'qrcode link';
        $this->load->library('mypdf');
        $this->mypdf->generate('users/qrcode', $data);
    }
    function getBarangs()
    {
        $postData = $this->input->post();
        $data = $this->barang_model->getBarangs($postData);
        echo json_encode($data);
    }
}
