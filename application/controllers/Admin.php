<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel', 'am');
    }

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
        $this->form_validation->set_rules('nameOfActivity', 'Name of activity', 'required');
        $this->form_validation->set_rules('personResponsible', 'person  Responsible', 'required');
        $this->form_validation->set_rules('activityDate', 'activity Date', 'required');
        $this->form_validation->set_rules('startTime', 'start Time', 'required');
        $this->form_validation->set_rules('timesUp', 'times` Up', 'required');
        $this->form_validation->set_rules('location', 'Location', 'required');

        if ($this->form_validation->run() == false) {

            // Start Link Active
            $data['link1'] = '';
            $data['link2'] = 'active';
            $data['link3'] = '';
            // End Link Active

            $data['activity'] = $this->am->getAllDataActivity();




            $this->load->view('template/header');
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar');
            $this->load->view('admin/activity', $data);
            $this->load->view('template/footer');
        } else {


            $this->am->insertActivity();
        }
    }
}
