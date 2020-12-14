<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('User_m'); //data user
        $this->load->model('Lokasi_m'); //data lokasi
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['title'] = 'Data';
        $this->load->view('user/head.php', $data);
        $this->load->view('user/index.php', $data);
    }

    public function profile()
    {
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['title'] = 'Data';
        $this->load->view('user/head.php', $data);
        $this->load->view('user/profile.php', $data);
    }
    public function peta()
    {
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['title'] = 'Data';
        $this->load->view('user/head.php', $data);
        $this->load->view('user/peta.php');
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['title'] = 'Data';
        $this->load->view('user/head.php', $data);
        $this->load->view('user/tambah.php');
    }

    public function do_upload()
    {
        /*  $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array(); */

        $config['upload_path'] = './asset/upload/'; // Added forward slash 
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = '10480';
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $input = "gambar";

        if (!$this->upload->do_upload($input)) {
            print_r($this->upload->display_errors());
        } else {
            /* $this->load->view('admin/upload.php'); */
            $upload_data = $this->upload->data();
            /*    var_dump($upload_data); */
            $userid = $this->session->userdata('id_user');
            $data = [
                "id_penyewa" => $userid,
                "nama_iklan" => $this->input->post('nama', true),
                "lat" => $this->input->post('lat', true),
                "lon" => $this->input->post('lng', true),
                "start" => $this->input->post('start', true),
                "end" => $this->input->post('end', true),
                "gambar" => $upload_data['file_name'],
                /* "lokasi" => $this->input->post('lokasi', true), */
                "alamat" => $this->input->post('alamat', true),
            ];

            $this->db->insert('reklame', $data); //insert to tabel point
            redirect('user/index');
        }
    }
}
