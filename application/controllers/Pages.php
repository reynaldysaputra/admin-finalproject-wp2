<?php
class Pages extends CI_Controller {
	public function __construct()
	{
	   parent::__construct();
	   cek_login();
	}
	public function index(){
		$data['admin'] = $this->M_admin->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/headerDashboard');
		$this->load->view('dashboard',$data);
		$this->load->view('templates/footerDashboard');
	}	

    public function feedbacks() {
        $this->load->view('templates/headerDashboard');
		$this->load->view('feedbackPage');
		$this->load->view('templates/footerDashboard');
    }
}
