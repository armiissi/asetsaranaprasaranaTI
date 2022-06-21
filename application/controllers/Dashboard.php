<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['Username' =>
        $this->session->userdata('Username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('Dashboard');
        $this->load->view('templates/footer');
    }
}
