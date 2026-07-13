<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->library('session');
	}

	function index(){
		$this->load->view('login2');
	}

	function aksi_login(){
		$usr = $this->input->post('userid');
		$pwd = $this->input->post('pwd');

		$cek = $this->m_login->cek_login($usr,$pwd);
		if($cek->num_rows() > 0){
			foreach ($cek->result() as $qad)
        	{
        		$data_session['id'] 		= $qad->id;
	          	$data_session['nama'] 		= $qad->nama;
	          	$data_session['subdit']		= $qad->subdit;
	          	$data_session['status']		= 'login';
        	}

			$this->session->set_userdata($data_session);

			// echo "true";
			redirect(base_url('dashboard'));

		}else{
			echo $this->session->set_flashdata('pesan', 'Username dan password salah !');
			// echo $this->session->set_flashdata('pesan', 'anda berhasil menginput data...!!!');
			redirect(base_url('login'));
			// echo "false";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
