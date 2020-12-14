<?php

function cek_admin()
{
    $ci = &get_instance();
    $cek = $ci->session->userdata('email');
    if ($cek != 'admin') {
        $ci->session->unset_userdata('email');
        $ci->session->unset_userdata('level');
        $ci->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Access restricted</div>');

        redirect('auth/login');
    }
}

function cek_login()
{
    $ci = &get_instance();
    $ceklogin = $ci->session->userdata('email');
    if ($ceklogin  == null) {

        $ci->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">Anda belum login</div>');
        redirect('auth/login');
    }
}

function cek_data()
{
    $ci = &get_instance();
    $ceklogin = $ci->session->userdata('email');
    if ($ceklogin  == null) {

        $ci->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">Anda belum login</div>');
        redirect('auth/login');
    }
}
