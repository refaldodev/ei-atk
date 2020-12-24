<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  Dashboard_model extends CI_Model
{

    public function getDataTanggal($id = null)
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('created');
    }
}
