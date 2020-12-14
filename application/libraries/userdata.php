<?php

class userdata
{
    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function data_user()
    {
        $ci = &get_instance();
        $userid = $ci->session->userdata('id_user');
        $ci->load->model('User_m');


        $user = $ci->User_m->getById($userid);
        return $user;
    }
}
