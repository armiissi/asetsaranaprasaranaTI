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
        $this->form_validation->set_rules('Username', 'username', 'trim|required');
        $this->form_validation->set_rules('Password', 'password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('auth/login', $data);
        } else {
            //validation success
            $this->_login();
        }
    }


    private function _login()
    {
        $username = $this->input->post('Username');
        $password = $this->input->post('Password');

        $user = $this->db->get_where('user', ['Username' => $username])->row_array();
        if ($user) {
            //user ada
            if (Password_verify($password, $user['Password'])) {
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                redirect('auth');
            }
            if (Password_verify($password, $user['Password'])) {
                $data = [
                    'id' => $user['id'],
                    'Username' => $user['Username']
                ];
                $this->session->set_userdata($data);
                redirect('Dashboard');
            }
        } else {
            //user tidak ada
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not Registered</div>');
            redirect('auth');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('Username', 'username', 'required|trim|is_unique[user.Username]', [
            'is_unique' => 'This Username hal already registered!'
        ]);
        $this->form_validation->set_rules('Password1', 'Password',  'required|trim|min_length[4]|matches[Password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password to short!'
        ]);
        $this->form_validation->set_rules('Password2', 'Password',  'required|trim|matches[Password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration';
            $this->load->view('auth/register', $data);
        } else {
            $data = [
                'Username' => htmlspecialchars($this->input->post('Username', true)),
                'Password' => Password_hash($this->input->post('Password1'), PASSWORD_DEFAULT)
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulation! your account has been created. Please Login</div>');
            redirect('auth');
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('Username');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            You have been logged out!</div>');
        redirect('auth');
    }
}
