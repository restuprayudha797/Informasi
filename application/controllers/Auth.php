<?php

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('email')) {

            redirect('admin');
        }
    }


    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('auth/index');
        } else {

            $this->_IsLogin();
        }
    }
    private function _IsLogin()
    {
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);

        $user = $this->db->get_where('users', ['email' => $email])->row_array();

        if ($user) {
            // Check if the email entered by the user is in the database

            // Check if the passwords match
            if (password_verify($password, $user['password'])) {

                $data = [
                    'email' => $user['email']
                ];

                $this->session->set_userdata($data);

                redirect('admin');
            } else {

                $this->session->set_flashdata('auth_message', '<div class="alert alert-danger text-center" role="alert">Password yang anda masukkan tidak sesuai</div>');

                redirect('auth');
            }
        } else {
            // notify the user the email entered does not exist

            // notify user
            $this->session->set_flashdata('auth_message', '<div class="alert alert-danger text-center" role="alert">Email tidak terdaftar</div>');
            redirect('auth');
        }
    }

    // ===== END LOGIN =====
}
