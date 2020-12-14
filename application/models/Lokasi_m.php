<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi_m extends CI_Model
{
    public function getAll()
    {

        $query = $this->db->get('lokasi')->result_array(); //select dari tabel warga
        return $query;
    }
}
