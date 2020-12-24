<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{
    public function get($id = null)
    {

        $this->db->select('transaksi.created as transaksi_created, transaksi.jumlah as volume, transaksi.nama as nama_pengambil, transaksi.transaksi_id as id_transaksi,  users.*, barang.*, satuan.name as satuan_nama, jenis_barang.name as jenis_barang');
        $this->db->from('transaksi');
        $this->db->join('barang', 'barang.barcode = transaksi.barcode');
        $this->db->join('users', 'users.user_id = transaksi.user_id');
        $this->db->join('satuan', 'satuan.satuan_id = transaksi.satuan_id');
        $this->db->join('jenis_barang', 'jenis_barang.jenis_barang_id = transaksi.jenis_barang_id');
        if ($id != null) {

            $this->db->Where('transaksi.user_id', $id);
        }

        $query = $this->db->get();
        return $query;
    }
    public function getEdit($id = null)
    {

        $this->db->select('transaksi.created as transaksi_created, transaksi.jumlah as volume, transaksi.nama as nama_pengambil, transaksi.transaksi_id as id_transaksi,  users.*, barang.*, satuan.name as satuan_nama, jenis_barang.name as jenis_barang');
        $this->db->from('transaksi');
        $this->db->join('barang', 'barang.barcode = transaksi.barcode');
        $this->db->join('users', 'users.user_id = transaksi.user_id');
        $this->db->join('satuan', 'satuan.satuan_id = transaksi.satuan_id');
        $this->db->join('jenis_barang', 'jenis_barang.jenis_barang_id = transaksi.jenis_barang_id');


        if ($id != null) {

            $this->db->Where('transaksi_id', $id);
        }

        $query = $this->db->get();
        return $query;
    }
    public function getData($id = null)
    {
        $this->db->select('barang.*, jenis_barang.name as jenis_barang_name, satuan.name as satuan_name');
        $this->db->from('barang');
        $this->db->join('jenis_barang', 'jenis_barang.jenis_barang_id = barang.jenis_barang_id');
        $this->db->join('satuan', 'satuan.satuan_id = barang.satuan_id');

        if ($id != null) {

            $this->db->Where('barcode', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function getDataPerTanggalPegawai()
    {
        $date = date('Y-m-d');
        // $query = $this->db->get_where('transaksi', ['created' => $date]);
        $user_id = $this->fungsi->user_login()->user_id;
        $this->db->select('*');
        $this->db->where('created', $date);
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('transaksi');

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function getDataPerTanggalAdmin()
    {
        $date = date('Y-m-d');
        // $query = $this->db->get_where('transaksi', ['created' => $date]);
        $this->db->select('*');
        $this->db->where('created', $date);
        $query = $this->db->get('transaksi');

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function tambah($post)
    {
        $params = [
            'nama' => $post['nama'],
            'nama_barang' => $post['nama_barang'],
            'jumlah' => $post['jumlah'],
            'user_id' => $post['user_id'],
            'barcode' => $post['barcode'],
            'jenis_barang_id' => $post['jenis_barang'],
            'satuan_id' => $post['satuan'],
            'created' => $post['created']



        ];
        $this->db->insert('transaksi', $params);
    }
    public function edit($post)
    {
        $params = [
            'nama' => $post['nama'],
            'jumlah' => $post['jumlah'],
            'user_id' => $post['user_id'],
            'barcode' => $post['barcode'],
            'jenis_barang_id' => $post['jenis_barang'],
            'satuan_id' => $post['satuan'],

            'created' => $post['created']

        ];
        $this->db->where('transaksi_id', $post['id']);
        $this->db->update('transaksi', $params);
    }
    public function hapus($id)
    {
        $this->db->where('transaksi_id', $id);
        $this->db->delete('transaksi');
    }
    public function getDataBarang($idjenisbarang)
    {
        return $this->db->get_where('barang', ['jenis_barang_id' => $idjenisbarang])->result();
    }

    public function totalTransaksiPegawai()
    {
        $user_id = $this->fungsi->user_login()->user_id;

        $query = $this->db->get_where('transaksi', ['user_id' => $user_id]);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function totalTransaksiAdmin()
    {
        $user_id = $this->fungsi->user_login()->user_id;

        $query = $this->db->get('transaksi');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    // range tanggal
    public function getDataTanggal($awal, $akhir, $id = null)
    {
        $this->db->select('transaksi.created as transaksi_created, transaksi.jumlah as volume, transaksi.nama as nama_pengambil, transaksi.transaksi_id as id_transaksi,  users.*, barang.*, satuan.name as satuan_nama, jenis_barang.name as jenis_barang');
        $this->db->from('transaksi');
        $this->db->join('barang', 'barang.barcode = transaksi.barcode');
        $this->db->join('users', 'users.user_id = transaksi.user_id');
        $this->db->join('satuan', 'satuan.satuan_id = transaksi.satuan_id');
        $this->db->join('jenis_barang', 'jenis_barang.jenis_barang_id = transaksi.jenis_barang_id');
        $this->db->where('transaksi.created >=', $awal);
        $this->db->where('transaksi.created <=', $akhir);
        if ($id != null) {

            $this->db->Where('transaksi.user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function view()
    {
        return $this->db->get('transaksi')->result();
    }
    public function save_batch($data)
    {
        return $this->db->insert_batch('transaksi', $data);
    }
}
