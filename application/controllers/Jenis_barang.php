<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_barang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('jenis_barang_model');
        check_not_login();
        check_admin();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['row']  = $this->jenis_barang_model->get();
        $data['title'] = "Halaman Jenis Barang";
        $this->template->load('template', 'product/jenis_barang_data', $data);
    }
    public function tambah()
    {
        $this->form_validation->set_rules('jenis_barang_id', 'Jenis_Barang_Id', 'required|is_unique[jenis_barang.jenis_barang_id]');
        $this->form_validation->set_message('required', '%s Masih kosong silahkan diisi');
        $this->form_validation->set_message('is_unique', '{field} sudah ada, silahkan ganti yang lain');

        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        $jenis_barang = new stdClass();
        $jenis_barang->jenis_barang_id = null;
        $jenis_barang->name = null;
        $data = [
            'page' => 'tambah',
            'row' => $jenis_barang,
            'title' => 'Tambah Data',
        ];
        $this->template->load('template', 'product/jenis_barang_form', $data);
    }

    public function process()
    {

        $this->form_validation->set_rules('jenis_barang_id', 'Jenis_Barang_Id', 'required|is_unique[jenis_barang.jenis_barang_id]');

        $this->form_validation->set_message('required', '%s Masih kosong silahkan diisi');
        $this->form_validation->set_message('is_unique', 'Kode Klasifikasi sudah ada, silahkan ganti yang lain!');

        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        if ($this->form_validation->run() == FALSE) {

            $jenis_barang = new stdClass();
            $jenis_barang->jenis_barang_id = null;
            $jenis_barang->name = null;
            $data = [
                'page' => 'tambah',
                'row' => $jenis_barang,
                'title' => 'Tambah Data',
            ];
            $this->template->load('template', 'product/jenis_barang_form', $data);
        } else {

            $post = $this->input->post(NULL, TRUE);
            if (isset($_POST['tambah'])) {
                $this->jenis_barang_model->tambah($post);
            } else if (isset($_POST['edit'])) {
                $this->jenis_barang_model->edit($post);
            }
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil ditambah');
            }
            redirect('jenis_barang');
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('jenis_barang_id', 'Jenis_Barang_Id', 'required');
        $this->form_validation->set_message('required', '%s Masih kosong silahkan diisi');


        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        if ($this->form_validation->run() == FALSE) {
            $query = $this->jenis_barang_model->get($id);
            if ($query->num_rows() > 0) {
                $jenis_barang = $query->row();
                $data = array(
                    'page' => 'edit',
                    'row' => $jenis_barang,
                    'title' => 'Edit Data',
                );
                $this->template->load('template', 'product/jenis_barang_edit', $data);
            } else {
                echo "<script>alert('data tidak ditemukan');";
                echo "window.location='" . site_url('jenis_barang') . "'; 
        </script>";
            }
        } else {
            $post = $this->input->post(NULL, TRUE);
            if (isset($_POST['edit'])) {
                $this->jenis_barang_model->edit($post);
            }
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil di ubah');
            }
            redirect('jenis_barang');
        }
    }

    public function hapus($id)
    {
        $this->jenis_barang_model->hapus($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'data berhasil dihapus');
        }
        redirect('jenis_barang');
    }
}
