<?php
class Login extends CI_Controller {
	public function index(){
        if ($this->session->userdata('email')) {
            redirect(base_url());
        }
        $this->form_validation->set_rules('email', 'Alamat Email','required|trim|valid_email', [
            'required' => 'Email Harus diisi!!',
            'valid_email' => 'Email Tidak Benar!!'
        ]);
        $this->form_validation->set_rules('password', 'Password','required|trim', [
            'required' => 'Password Harus diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $email = htmlspecialchars($this->input->post('email',true));
        $password = $this->input->post('password', true);
        $admin = $this->M_admin->cekData(['email' => $email])->row_array();
    //jika admin ada
    if ($admin) {
        //cek password
            if (md5($password) == $admin['password']){
                $data = [
                    'email' => $admin['email']
                ];
            $this->session->set_userdata($data);
            redirect(base_url());
            } else {
                $this->session->set_flashdata('pesan', '<script>Swal.fire("Gagal!","Password Salah!","error")</script>');
                redirect('login');
                }
            } else {
                $this->session->set_flashdata('pesan', '<script>Swal.fire("Gagal!","Email Tidak Terdaftar!","error")</script>');
                redirect('login');
                }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('pesan','<script>Swal.fire("Berhasil!","Anda Telah Logout!","success")</script>');
        redirect('login');
    }
}