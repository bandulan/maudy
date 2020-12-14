<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('login.php');
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login.php');
        }
        //redirect ke function proses login -> suksess
        else {
            $this->suksess();
        }
    }

    private function suksess()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        //cek apakah email terdaftar
        $login = $this->db->get_where('user', ['email' => $email])->row_array();

        //bila email ada di database
        if ($login) {
            //bila password benar
            if (password_verify($password, $login['password'])) {
                //buat data session
                $data = [
                    'id_user' => $login['id_user'],
                    'email' => $login['email'],
                    'level' => $login['level']
                ];
                $this->session->set_userdata($data);
                //bila level admin
                if ($login['level'] == 0) {
                    redirect('admin');
                } //bila level user
                else {
                    redirect('user');
                }
            } //bila passwword salah
            else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Login gagal! Password salah.</div>');
                redirect('auth/login');
            }
        } //bila email tidak ada di database
        else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Login gagal! Email belum terdaftar.</div>');
            redirect('auth/login');
        }
    }

    public function regis()
    {
        //set validasi di form tambah
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[user.email]', [
            'is_unique' => 'Email Sudah Terpakai!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required');

        //kalau data yang di input salah > kembali ke form
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("registrasi.php");
        }   // kalau validasi benar > input data
        else {
            $data = [
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
                'level' => 1,
                'foto' => 'default.png',
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'phone' => htmlspecialchars($this->input->post('phone', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true))
            ];
            //input registrasi
            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Registrasi berhasil! Silahkan login untuk melanjutkan. </div>');
            redirect('auth/login');
            //echo "<script>alert('Pendaftaran Berhasil!'); window.location=('login');</script>";
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('level');
        $this->session->unset_userdata('id_user');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil logout!</div>');
        redirect('auth/login');
    }
}
