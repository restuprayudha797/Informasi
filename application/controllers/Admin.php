<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {

        // Start Link Active
        $data['link1'] = 'active';
        $data['link2'] = '';
        $data['link3'] = '';
        // End Link Active


        $this->load->view('template/header');
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar');
        $this->load->view('admin/index');
        $this->load->view('template/footer');
    }

    public function activity()
    {
        // Start Link Active
        $data['link1'] = '';
        $data['link2'] = 'active';
        $data['link3'] = '';
        // End Link Active

        $this->load->view('template/header');
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar');
        $this->load->view('admin/activity');
        $this->load->view('template/footer');
    }
}
