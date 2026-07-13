<?php 

class Aktivitas extends CI_Controller{

  	function __construct(){
    	parent::__construct();
    	$this->load->model('M_aktivitas');
      $this->load->model('M_surat');
  	}

  	function index(){
      $limit = '6';
    	$data['aktivitas'] = $this->M_aktivitas->data_aktivitas_limit($limit)->result_array();
      $this->template->load('template_web','aktivitas/web_aktivitas',$data);
  	}

    function detail(){
      $id = $this->uri->segment(3);
      $data['aktivitas'] = $this->M_aktivitas->get_aktivitas($id)->row_array();
      $data['tambahan'] = $this->M_aktivitas->get_lampiran($id)->result_array();
      $tambahan = $this->M_aktivitas->get_lampiran($id)->result_array();
      $this->template->load('template_web','aktivitas/aktivitas',$data);
    }

    function list_aktivitas(){
      $data['aktivitas'] = $this->M_aktivitas->data_aktivitas()->result_array();
      $this->template->load('template_web','aktivitas/web_aktivitas',$data);
    }

    function daftar_aktivitas(){
      $this->template->load('template','aktivitas/list_aktivitas');
    }

  	function add_aktivitas(){
    
    	$this->template->load('template','aktivitas/add_aktivitas');
  	}

  	function data_aktivitas(){
    
	    $data = $this->M_aktivitas->data_aktivitas()->result_array();
	    echo json_encode($data);
  	}

  	function get_aktivitas(){
	    $id = $this->uri->segment(3);
	    $data = $this->M_aktivitas->get_aktivitas($id)->result_array();
	    echo json_encode($data);
  	}

  	function lihat_aktivitas(){

    	$id = $this->uri->segment(3);
	    $data['aktivitas'] = $this->M_aktivitas->get_aktivitas($id)->row_array();
	    // $data['lampiran'] = $this->M_aktivitas->get_lampiran_aktivitas($id);
	    $this->template->load('template','aktivitas/lihat_aktivitas',$data);
  	}

  	function ubah_aktivitas(){

	    $id = $this->uri->segment(3);
	    $data['aktivitas'] = $this->M_aktivitas->get_aktivitas($id)->row_array();
	    // $data['lampiran'] = $this->M_surat->get_lampiran_surat_masuk($id);
	    $this->template->load('template','aktivitas/ubah_aktivitas',$data);
  	}

  	function hapus_aktivitas()
    {
        $id = $this->uri->segment(3);
        $this->M_aktivitas->hapus_aktivitas($id);
    }

  	function simpan(){
    	
    	$id_aktivitas			  = $this->M_aktivitas->kode_aktivitas();
	    $nm_aktivitas			  = $this->input->post('aktivitas');
	  	$tgl_aktivitas			= $this->input->post('tgl_aktivitas');
	  	$detail 				    = $this->input->post('detail_aktivitas');
	  	$username 				  = $this->session->userdata('id');
	  	$tgl 					      = date("Y-m-d");

	  	// Foto 
          $files     = $_FILES['foto']['name'];
          $this->upload->initialize($this->set_upload_options());
          $this->upload->do_upload('foto');
          $upload    = $this->upload->data();
          $path      = 'uploads/aktivitas/';
          $nama_file = $files;

          // echo $path.$nama_file;
          // die();
        // Foto 

	  	$aktivitas['IDAKTV'] = $id_aktivitas;
	  	$aktivitas['NMAKTV'] = $nm_aktivitas;
	  	$aktivitas['TGLAKT'] = $tgl_aktivitas;
	  	$aktivitas['DTAKTV'] = $detail;
	  	$aktivitas['GBAKTV'] = $path.$nama_file;
	  	$aktivitas['USRNMS'] = $username;
	  	$aktivitas['USRDTS'] = $tgl;

      $tmp_file = $this->M_aktivitas->get_tmp_aktivitas($username)->result_array();
      // var_dump($tmp_file);
      // die();
      foreach ($tmp_file as $tmp ) {
        $rename         = $tmp['attachRENAME'];
        $attach['attachIDATCH'] = $this->M_surat->kode_attach();
        $attach['attachIDSMBR'] = $id_aktivitas;
        $attach['attachJNFILE'] = $tmp['attachJNFILE'];
        $attach['attachNMFILE'] = $tmp['attachNMFILE'];
        $attach['attachRENAME'] = $rename;
        $attach['attachPATTHS'] = $tmp['attachPATTHS'];
        $attach['attachUSRNMS'] = $username;
        $attach['attachUSRDTS'] = $tgl;

        $this->M_aktivitas->simpan_attach($attach);
        $this->M_aktivitas->hapus_tmp_file($rename,$username);
      }

	  	$this->M_aktivitas->simpan_aktivitas($aktivitas);
      redirect('aktivitas/daftar_aktivitas');
	}

  function simpan_gambar(){
      
      $id_aktivitas       = $this->M_aktivitas->kode_aktivitas();
      $nm_aktivitas       = $this->input->post('aktivitas');
      $tgl_aktivitas      = $this->input->post('tgl_aktivitas');
      $detail             = $this->input->post('detail_aktivitas');
      $username           = $this->session->userdata('id');
      $tgl                = date("Y-m-d");

      $tmp['attachIDATCH'] = $this->M_surat->kode_attach(); 
      $tmp['attachIDSMBR'] = '0';
      $tmp['attachJNFILE'] = $jns_file;
      $tmp['attachNMFILE'] = $nama_asli;
      $tmp['attachRENAME'] = $rename;
      $tmp['attachPATTHS'] = $path;
      $tmp['attachUSRNMS'] = $usrnms;
      $tmp['attachUSRDTS'] = $usrdts;

      $this->M_aktivitas->simpan_aktivitas($aktivitas);
      redirect('aktivitas/daftar_aktivitas');
  }


	private function set_upload_options(){
         $files = $_FILES['foto']['name'];

         $config = array();
         $config['upload_path']      = './uploads/aktivitas/';
         $config['allowed_types']    = 'gif|jpg|png';
         // $config['max_size']         = 50024;
         $config['file_name']        = $files;
         // $config['overwrite']        = FALSE;

         return $config;
    }

	function update(){
    	
    	$id_aktivitas			= $this->input->post('id_aktivitas');
	    $nm_aktivitas			= $this->input->post('aktivitas');
	  	$tgl_aktivitas		= $this->input->post('tgl_aktivitas');
	  	$detail 				  = $this->input->post('detail_aktivitas');
      $gambar           = $this->input->post('gb_aktivitas');
	  	$username 				= $this->session->userdata('id');
	  	$tgl 					    = date("Y-m-d");

	  	// Foto 
          $files     = $_FILES['foto']['name'];
          $this->upload->initialize($this->set_upload_options());
          $this->upload->do_upload('foto');
          $upload    = $this->upload->data();
          $path      = 'uploads/aktivitas/';
          $nama_file = $files;

          // echo $detail;
          // die();
        // Foto 
        if ($files == '') {
        	$gb = $gambar;
        }else{
        	$gb = $files;
        }
        // echo $gb;
        // die();
	  	// $aktivitas['IDAKTV'] = $id_aktivitas;
	  	$aktivitas['NMAKTV'] = $nm_aktivitas;
	  	$aktivitas['TGLAKT'] = $tgl_aktivitas;
	  	$aktivitas['DTAKTV'] = $detail;
	  	$aktivitas['GBAKTV'] = $gb;
	  	$aktivitas['USRNMS'] = $username;
	  	$aktivitas['USRDTS'] = $tgl;

	  	$this->M_aktivitas->update_aktivitas($id_aktivitas,$aktivitas);
	  	redirect('aktivitas/daftar_aktivitas');
	}

  function add_gambar(){

        // echo $dropzone;
        // die();
        $target_dir = "uploads/aktivitas/";
        $request = 1;
        if(isset($_POST['request'])){
          $request = $_POST['request'];
        }


        // Upload file
        if($request == 1){
          $nama_asli  = $_FILES["file"]["name"];
          $ext        = pathinfo($nama_asli, PATHINFO_EXTENSION);    
          $jns_file   = 'aktivitas';
          $temp       = explode(".", $nama_asli);
          $rename     = md5($nama_asli.time()) . '.' . end($temp);
          $path       = 'uploads/aktivitas/'; // Upload directory
          $usrnms     = $this->session->userdata('id');
          $usrdts     = date("Y-m-d");
          
          // die();
          $target_file = $target_dir . basename($rename);
          
          $msg = "";
            
                
              if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$rename)) {
                  $tmp['attachIDATCH'] = $this->M_surat->kode_attach(); 
                  $tmp['attachIDSMBR'] = '0';
                  $tmp['attachJNFILE'] = $jns_file;
                  $tmp['attachNMFILE'] = $nama_asli;
                  $tmp['attachRENAME'] = $rename;
                  $tmp['attachPATTHS'] = $path;
                  $tmp['attachUSRNMS'] = $usrnms;
                  $tmp['attachUSRDTS'] = $usrdts;

                  $this->M_surat->simpan_tmp_file($tmp);
                    $msg = "Successfully uploaded";    
                  
              }else{
                    $msg = "Error while uploading";
              }
                    echo $msg;

              }
            
    }


  	

}
