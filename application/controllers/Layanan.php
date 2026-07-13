<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

	public function index()
	{
		$this->load->view('layanan');
	}
	
	function kirim_pesan(){
		// echo "sa";
		// die();
		$isi_kategori = $this->input->post('kategori');
	    $pesan    = $this->input->post('pesan');
	    $nama     =  $this->input->post('nama');
	    $email    = $this->input->post('emails');
	    $instn    = $this->input->post('instansi');
	    $telp     = $this->input->post('telp');
	    
	    if ($isi_kategori == '1') {
	    	$kategori = 'Foto Udara dan Lidar';
	    }elseif ($isi_kategori == '2') {
	    	$kategori = 'Tematik';
	    }elseif ($isi_kategori == '3') {
	    	$kategori = 'Land Survei';
	    }elseif ($isi_kategori == '4') {
	    	$kategori = 'IT';
	    }elseif($isi_kategori == '5'){
	    	$kategori = 'Training';
	    }else{
	    	$kategori = 'Software dan Citra';
	    }

        $config = [
            'mailtype'    => 'html',
            'charset'     => 'utf-8',
            'protocol'    => 'smtp',
            'smtp_host'   => 'smtp.gmail.com',
            'smtp_user'   => 'waindospecterra.id@gmail.com', // Email gmail
            'smtp_pass'   => 'W41nd051',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'        => "\r\n",
            'newline'     => "\r\n"
        ];

            // Load library email dan konfigurasinya
            $this->load->library('email', $config);

            // Email dan nama pengirim
            $this->email->from('waindospecterra.id@gmail.com', 'Waindo - Pesan Konsultasi');

            // Email penerima
            $this->email->to('waindospecterra.id@gmail.com'); // Ganti dengan email tujuan

            // Lampiran email, isi dengan url/path file
             // $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

            // Subject email
            $this->email->subject('Pemberitahuan');

            // Isi email
            $this->email->message("
            <div class='container-fluid' align='center'>
            <div class='row'>
            <table style='border-spacing: 0px; border-collapse: collapse; vertical-align: top; text-align: left; padding: 0px;'>
            <tbody>
            <tr style='vertical-align: top; text-align: left; padding: 0px;'>
            <td class='m_4900126560147311131container-row' style='width: 600px; overflow-wrap: break-word; border-collapse: collapse; vertical-align: top; text-align: left; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 150%; font-size: 16px; word-break: break-word; margin: 0px 0px 12px; padding: 0px 8px;'>
            <hr style='margin: 0px; border: 1px solid rgb(221, 221, 221);'>
            <br>
            <strong>Pemberitahuan</strong> &nbsp; Terkait Konsultasi Online Pada Bidang $kategori,
            <br>
            <br>
            <p style='color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 150%; font-size: 16px; margin: 0px 0px 10px; padding: 0px;'>Pesan atas nama, $nama</a>:
            </p>
            </td>
            </tr>
            <tr style='vertical-align: top; text-align: left; padding: 0px;'>
            <td class='m_4900126560147311131container-row' style='width: 600px; overflow-wrap: break-word; border-collapse: collapse; vertical-align: top; text-align: left; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 150%; font-size: 16px; word-break: break-word; margin: 0px; padding: 0px 4px;'>
            <table style='width: 100%; border-spacing: 0px; border-collapse: separate; vertical-align: top; text-align: left; border-radius: 20px; overflow: hidden; padding: 0px; border: 1px solid rgb(221, 221, 221);'>
            <tbody>
            <tr style='vertical-align: top; text-align: left; padding: 0px;'>
            <td style='width: 100%; overflow-wrap: break-word; border-collapse: collapse; vertical-align: top; text-align: left; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 150%; font-size: 16px; word-break: break-word; margin: 0px; padding: 24px;'>
            <table style='width: 100%; border-spacing: 0px; border-collapse: collapse; vertical-align: top; text-align: left; padding: 0px;'>
            <tbody>
            <tr style='width: 100%; vertical-align: top; text-align: left; padding: 0px;'>
            <td style='overflow-wrap: break-word; border-collapse: collapse; vertical-align: top; text-align: left; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 150%; font-size: 16px; word-break: break-word; margin: 0px; padding: 0px;'>
            <table style='border-spacing: 0px; border-collapse: collapse; vertical-align: top; text-align: left; padding: 0px;'>
            <tbody>
            <tr style='vertical-align: top; text-align: center; padding: 0px;'>
            <td style='overflow-wrap: break-word; border-collapse: collapse; vertical-align: top; text-align: center; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 150%; font-size: 16px; word-break: break-word; overflow: hidden; text-overflow: ellipsis; margin: 0px; padding: 0px;'>
            Isi Pesan: $pesan
            <br> Email: $email
            <br> No Telpon: $telp
            <br> Instansi: $instn
            
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            <br>
            <br>
            <hr style='margin:0px;border:1px solid rgb(221,221,221)'>
            </tbody>
            </table>
            <table style='background-color: transparent; border-spacing: 0px; border-collapse: collapse; vertical-align: top; text-align: center; padding: 0px;'>
            <tbody>
            <tr style='vertical-align: top; text-align: center; padding: 0px;'>
            <td style='overflow-wrap: break-word; border-collapse: collapse; vertical-align: top; text-align: center; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 150%; font-size: 16px; word-break: break-word; margin: 0px; padding: 0px;'>
            <br>
            
            </td>
            </tr>
            </tbody>
            </table>
            </div>
            </div>
                ");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            //                     $kode = $this->m_pemilik->kodemax();
            // $id = $this->m_pemilik->kodeid();
            // $this->m_user->simpan($kode,$id);
            // $this->m_pemilik->simpan($kode);
            echo $this->session->set_flashdata('pesan', 'Registrasi Akun Berhasil');
            // echo $this->session->set_flashdata('pesan', 'anda berhasil menginput data...!!!');
            redirect(base_url('layanan'));
        } else {
            echo $this->session->set_flashdata('pesan', 'Error! email tidak dapat dikirim, Silahkan coba lagi');
            // echo $this->session->set_flashdata('pesan', 'anda berhasil menginput data...!!!');
            redirect(base_url('layanan'));
            // echo 'Error! email tidak dapat dikirim.';
        }

    }
}
