<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Auth extends CI_Controller {
 
    public function index($error = NULL) {
        $data = array(
            'title' => 'MM Bantim - Login',
            'action' => site_url('auth/login'),
            'error' => $error
        );
        $this->load->view('login', $data);
    }
 
    public function login() {
        $this->load->model('Auth_model');
        $login = $this->Auth_model->login($this->input->post('username'), md5($this->input->post('password')));
 
        if ($login == 1) {
            //ambil detail data
            $row = $this->Auth_model->data_login($this->input->post('username'), md5($this->input->post('password')));

            //daftarkan session
            $data = array(
                'logged' => TRUE,
                'username' => $this->input->post('username'),
                'hak_akses' => $row[0]['HAK_AKSES']
            );
            $this->session->set_userdata($data);
 
            //redirect ke halaman sukses
            redirect(site_url('mudamudi/dashboard'));

        } else {
            //tampilkan pesan error
            $error = 'Username atau password salah!';
            $this->index($error);
        }
    }
 
    function logout() {
        //destroy session
        $this->session->sess_destroy();
        
        //redirect ke halaman login
        redirect(site_url('auth'));
    }
 
}
 
/* End of file auth.php */
/* Location: ./application/controllers/auth.php */