<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{


    public function get($id = null)
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
    public function getUser()
    {
        return $this->db->get('barang');
    }

    // public function getData($id = null)
    // {
    //     $this->db->select('barang.*, jenis_barang.name as jenis_barang_name, satuan.name as satuan_name');
    //     $this->db->from('barang');
    //     $this->db->join('jenis_barang', 'jenis_barang.jenis_barang_id = barang.jenis_barang_id');
    //     $this->db->join('satuan', 'satuan.satuan_id = barang.satuan_id');

    //     if ($id != null) {

    //         $this->db->Where('barang_id', $id);
    //     }
    //     $query = $this->db->get();
    //     return $query;
    // }

    // add
    public function tambah($post)
    {
        $params = [
            'barang_id' => $post['barang_id'],

            'barcode' => $post['barcode'],
            'nama_barang' => $post['nama_barang'],
            'jenis_barang_id' => $post['jenis_barang'],
            'satuan_id' => $post['satuan']

        ];
        $this->db->insert('barang', $params);
    }

    public function edit($post)
    {
        // $params = [
        //     'barang_id' => $post['barang_id'],
        //     'barang_klasifikasi_id' => $post['barang_klasifikasi'],
        //     'barcode' => $post['barcode'],
        //     'nama_barang' => $post['nama_barang'],
        //     'jenis_barang_id' => $post['jenis_barang'],
        //     'satuan_id' => $post['satuan']

        // ];
        $params['barcode'] = $post['barcode'];
        $params['barang_id'] = $post['barang_id'];
        $params['nama_barang'] = $post['nama_barang'];
        $params['jenis_barang_id'] = $post['jenis_barang'];
        $params['satuan_id'] = $post['satuan'];
        $this->db->where('barcode', $post['id_barcode']);
        $this->db->where('barang_id', $post['id']);
        $this->db->update('barang', $params);
    }

    public function hapus($id)
    {
        $this->db->where('barcode', $id);

        $this->db->delete('barang');
    }
    public function getDataAutoComplete($autocomplete)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->like('nama_barang', $autocomplete);
        $this->db->limit(10);
        return $this->db->get()->result_array();
    }

    // public function getEmployees($id)
    // {
    //     $query = $this->db
    //         ->select('barang.*, jenis_barang.name as as nama_jenis_barang, jenis_barang.jenis_barang_id as kode_barang')
    //         ->join('jenis_barang', 'jenis_barang.jenis_barang_id = barang.jenis_barang_id')
    //         ->join('satuan', 'satuan.satuan_id = barang.satuan_id')
    //         ->where("barang.barang_id LIKE '$id'")
    //         ->limit(25)
    //         ->get();

    //     return $query->result_array();
    // }

    function getBarangs($postData)
    {
        $response = array();
        if ($postData['search']) {
            // $this->db->select('*');
            $this->db->distinct('jenis_barang_id');
            $this->db->where('jenis_barang_id like "%' . $postData['search'] . '%"');
            $records = $this->db->get('barang')->result();

            foreach ($records as $row) {
                $response[] = array(
                    "value" => $row->barang_id,
                    "label" => $row->jenis_barang_id,
                    "qrcode" => $row->barcode
                );
            }
        }
        return $response;
    }
}
