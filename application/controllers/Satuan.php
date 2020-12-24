<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Satuan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('satuan_model');
        $this->load->model('jenis_barang_model');
        check_not_login();
        check_admin();
    }

    public function index()
    {

        $data['row']  = $this->satuan_model->get();
        $data['title'] = "Halaman satuan";
        $this->template->load('template', 'product/satuan_data', $data);
    }
    public function tambah()
    {

        $satuan = new stdClass();
        $satuan->satuan_id = null;
        $satuan->name = null;
        $satuan->category_id = null;
        $query_jenis_barang = $this->jenis_barang_model->get();
        $data = [
            'page' => 'tambah',
            'row' => $satuan,
            'category' => $query_jenis_barang,
            'title' => 'Tambah Data',
        ];
        $this->template->load('template', 'product/satuan_form', $data);
    }

    public function process()
    {
        $post = $this->input->post(NULL, TRUE);
        if (isset($_POST['tambah'])) {
            $this->satuan_model->tambah($post);
        } else if (isset($_POST['edit'])) {
            $this->satuan_model->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil ditambah');
        }
        redirect('satuan');
    }

    public function edit($id)
    {
        $query = $this->satuan_model->get($id);
        if ($query->num_rows() > 0) {
            $satuan = $query->row();
            $query_jenis_barang = $this->jenis_barang_model->get();

            $data = array(
                'page' => 'edit',
                'row' => $satuan,
                'category' => $query_jenis_barang,
                'title' => 'Edit Data',
            );
            $this->template->load('template', 'product/satuan_form', $data);
        } else {
            echo "<script>alert('data tidak ditemukan');";
            echo "window.location='" . site_url('satuan') . "'; 
        </script>";
        }
    }

    public function hapus($id)
    {
        $this->satuan_model->hapus($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'data berhasil dihapus');
        }
        redirect('satuan');
    }
}
