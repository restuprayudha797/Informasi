<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel', 'am');


        // auto complete feature 
        $time = time() - 60 * 60 * 24;

        $date = date('Y-m-d', $time);

        $data = array(
            'role_activity' => 2
        );

        $where = ['activityDate' => $date, 'role_activity' => 0];

        $this->db->where($where)->update('activity', $data);
        // end auto complete feature 


    }

    public function index()
    {

        // Start Link Active
        $data['link1'] = 'active';
        $data['link2'] = '';
        $data['link3'] = '';
        $data['link4'] = '';
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
            $data['link4'] = '';
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
    public function deleteActivity($id)
    {
        $this->am->deleteActivityAction($id);
    }

    public function cancelActivity($id)
    {

        $this->am->cancelActivity($id);
    }

    public function cancelActivities()
    {
        // Start Link Active
        $data['link1'] = '';
        $data['link2'] = '';
        $data['link3'] = 'active';
        $data['link4'] = '';

        // End Link Active

        $data['activity'] = $this->am->getAllDataCancelActivity();

        $this->load->view('template/header');
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar');
        $this->load->view('admin/cancelActivities', $data);
        $this->load->view('template/footer');
    }


    public function carriedOutActivities()
    {
        // Start Link Active
        $data['link1'] = '';
        $data['link2'] = '';
        $data['link3'] = '';
        $data['link4'] = 'active';

        // End Link Active

        $data['activity'] = $this->am->getAllcarriedOutActivities();

        $this->load->view('template/header');
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar');
        $this->load->view('admin/carriedOutActivities', $data);
        $this->load->view('template/footer');
    }

    public function editActivity($id)
    {
        $data['activity'] = $this->am->editActivity($id);
    }
}
