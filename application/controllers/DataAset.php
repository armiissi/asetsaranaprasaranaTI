<?php

class DataAset extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id')) {
            redirect('auth');
        }
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Data Aset';
        $data['DataAset'] = $this->modeldataaset->tampildata();
        $data['user'] = $this->db->get_where('user', ['Username' =>
        $this->session->userdata('Username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/footer');
        $this->load->view('DataAset', $data);
    }

    public function tambah_aksi()
    {
        $user                   = $this->session->userdata('id');
        $Jenis_Aset             = $this->input->post('Jenis_Aset');
        $Merk                   = $this->input->post('Merk');
        $Type                   = $this->input->post('Type');
        $Spesifikasi_Teknis     = $this->input->post('Spesifikasi_Teknis');
        $MAC_Address            = $this->input->post('MAC_Address');
        $Tahun_Perolehan        = $this->input->post('Tahun_Perolehan');
        $Status                 = $this->input->post('Status');
        $Lokasi_Aset            = $this->input->post('Lokasi_Aset');
        $Tanggal_Pemasangan     = $this->input->post('Tanggal_Pemasangan');
        $Alokasi_IPv4           = $this->input->post('Alokasi_IPv4');


        $data = array(
            'user'                  => $user,
            'Jenis_Aset'            => $Jenis_Aset,
            'Merk'                  => $Merk,
            'Type'                  => $Type,
            'Spesifikasi_Teknis'    => $Spesifikasi_Teknis,
            'MAC_Address'           => $MAC_Address,
            'Tahun_Perolehan'       => $Tahun_Perolehan,
            'Status'                => $Status,
            'Lokasi_Aset'           => $Lokasi_Aset,
            'Tanggal_Pemasangan'    => $Tanggal_Pemasangan,
            'Alokasi_IPv4'          => $Alokasi_IPv4
        );
        // echo json_encode($data);
        // exit;

        $this->modeldataaset->tambah_data($data, 'kebutuhan_data');
        redirect('DataAset/index');
    }


    public function editdata($Nomor)
    {
        $where = array('Nomor' => $Nomor);
        $data['DataAset'] = $this->modeldataaset->editdata($where, 'kebutuhan_data')->result();
        $data['title'] = 'Edit Data';
        $data['user'] = $this->db->get_where('user', ['Username' =>
        $this->session->userdata('Username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('editdata', $data);
        $this->load->view('templates/footer');
    }

    public function updatedata()
    {
        $Nomor                  = $this->input->post('Nomor');
        $Jenis_Aset             = $this->input->post('Jenis_Aset');
        $Merk                   = $this->input->post('Merk');
        $Type                   = $this->input->post('Type');
        $Spesifikasi_Teknis     = $this->input->post('Spesifikasi_Teknis');
        $MAC_Address            = $this->input->post('MAC_Address');
        $Tahun_Perolehan        = $this->input->post('Tahun_Perolehan');
        $Status                 = $this->input->post('Status');
        $Lokasi_Aset            = $this->input->post('Lokasi_Aset');
        $Tanggal_Pemasangan     = $this->input->post('Tanggal_Pemasangan');
        $Alokasi_IPv4           = $this->input->post('Alokasi_IPv4');


        $data = array(
            'Jenis_Aset'            => $Jenis_Aset,
            'Merk'                  => $Merk,
            'Type'                  => $Type,
            'Spesifikasi_Teknis'    => $Spesifikasi_Teknis,
            'MAC_Address'           => $MAC_Address,
            'Tahun_Perolehan'       => $Tahun_Perolehan,
            'Status'                => $Status,
            'Lokasi_Aset'           => $Lokasi_Aset,
            'Tanggal_Pemasangan'    => $Tanggal_Pemasangan,
            'Alokasi_IPv4'          => $Alokasi_IPv4
        );
        $where = array(
            'Nomor'                 => $Nomor
        );


        $this->modeldataaset->updatedata($where, $data, 'kebutuhan_data');
        redirect('DataAset/index');
    }


    public function hapusdata($Nomor)
    {
        $where = array('Nomor' => $Nomor);
        $this->modeldataaset->hapusdata($where, 'kebutuhan_data');
        redirect('DataAset/index');
    }

    public function detail($Nomor)
    {
        $data['title'] = 'Detail Data';
        $detail = $this->modeldataaset->detaildata($Nomor);
        $data['detail'] = $detail;
        $data['user'] = $this->db->get_where('user', ['Username' =>
        $this->session->userdata('Username')])->row_array();
        $this->load->model('modeldataaset');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('detail', $data);
        $this->load->view('templates/footer');
    }
}
