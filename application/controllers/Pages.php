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
		$data['feedback'] = $this->M_feedback->getFeedback()->result_array();
        $this->load->view('templates/headerDashboard');
		$this->load->view('feedbackPage',$data);
		$this->load->view('templates/footerDashboard');
	}
	public function hapusFeedback()
    {
		$this->session->set_flashdata('pesan','<script>Swal.fire("Berhasil!","Feedback Telah Dihapus!","success")</script>');
        $where = ['id' => $this->uri->segment(3)];
        $this->M_feedback->hapusFeedback($where);
		redirect('pages/feedbacks');
    }
}
