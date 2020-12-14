<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{

    public function getById($userid)
    {

        $query = $this->db->get_where('user', ['id_user' => $userid])->row_array(); //select dari tabel warga
        return $query;
    }
}
