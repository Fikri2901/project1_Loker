<?php
defined('BASEPATH') or exit('No direct script access allowed');

class job_post extends CI_Controller
{

	public function __construct()
    {
        parent::__construct();

        $this->load->model('loker_model');
    }

    public function index()
    {
		$data['loker'] = $this->loker_model->GetLoker()->result();
        $data['title'] = 'JOBBLY - Post';
        $this->load->view('v_pelamar/header', $data);
        $this->load->view('v_pelamar/job_post');
        $this->load->view('v_pelamar/footer');
    }
}
