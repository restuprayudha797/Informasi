<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('HomeModel', 'hm');
    }
    public function index()
    {

        $data['toDay'] = $this->hm->toDay();
        $data['Tomorrow'] = $this->hm->Tomorrow();


        $this->load->view('templates/header');
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
